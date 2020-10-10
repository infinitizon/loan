<?php

include 'InitDB.php';


class TicketClass {

    private $conn;

    public function __construct() {
        $initDBObj = new InitDB();
        $this->conn = $initDBObj->conn;

        //$_SESSION['hlbank_user']['id'] = 1;
        $this->ticket_id = $_SESSION['hlbank_user']['id'];
        if (!isset($this->ticket_id)) {
            header("Location: ./login.php");
            exit();
        }
    }

    public function submit_ticket($user_id, $sub, $depart, $priority, $msg, $attachments) {


        if (empty($_POST[$user_id]) || empty($_POST[$sub]) || empty($_POST[$depart]) || empty($_POST[$priority]) || empty($_POST[$msg])) {
            echo "<p class='error'>All the fields are required</p>";
        } else if (strlen($_POST[$sub]) < 5) {
            echo "<p class='error'>Your message subject length should be greater than 5 characters</p>";
        } else if (strlen($_POST[$msg]) < 5) {
            echo "<p class='error'>Your message length should be greater than 5 characters</p>";
        } else {

            $user_id = $_POST[$user_id];
            $subject = $this->conn->real_escape_string($_POST[$sub]);
            $depart = $_POST[$depart];
            $priority = $_POST[$priority];
            $msg = $this->conn->real_escape_string($_POST[$msg]);
            $filearr_name = $this->add_attachmets($attachments);

            foreach ($filearr_name as $fileerror) {

                if ($fileerror != FALSE) {
                    echo "<p class='success'>File attached successfully.</p>";
                } else {
                    echo "<p class='error'>$fileerror</p>";
                }
            }

            $ifilePath = implode(",", $filearr_name);

            if ($this->conn->query("INSERT INTO `support_ticket`( `user_id`, `priority`, `subject`, `msg`, `attachs`, `depart` ) VALUES('$user_id','$priority','$subject','$msg','$ifilePath','$depart')")) {
                $ticket_number = $this->conn->insert_id;
                $_SESSION['ticket_success'] = "Your ticket number #$ticket_number successfully created , wait few hours to get resolved.";
                
               
               
            }
        }
    }

    private function add_attachmets($files) {

        $errors = array();
        $uploadedFiles = array();
        $extension = array("jpeg", "jpg", "png", "gif");
        $bytes = 1024;
        $KB = 1024;
        $totalBytes = $bytes * $KB;
        $UploadFolder = "TicketAttachments";

        $counter = 0;

        foreach ($_FILES[$files]["tmp_name"] as $key => $tmp_name) {
            $temp = $_FILES[$files]["tmp_name"][$key];
            //$name = $_FILES[$files]["name"][$key];
            $name = date('dmYHis') . str_replace(" ", "", basename($_FILES[$files]["name"][$key]));


            if (empty($temp)) {
                break;
            }

            $counter++;
            $UploadOk = true;

            if ($_FILES[$files]["size"][$key] > $totalBytes) {
                $UploadOk = false;
                array_push($errors, $name . " file size is larger than the 1 MB.");
            }

            $ext = pathinfo($name, PATHINFO_EXTENSION);
            if (in_array($ext, $extension) == false) {
                $UploadOk = false;
                array_push($errors, $name . " is invalid file type.");
            }

            if (file_exists($UploadFolder . "/" . $name) == true) {
                $UploadOk = false;
                array_push($errors, $name . " file is already exist.");
            }

            if ($UploadOk == true) {
                array_push($uploadedFiles, $name);
                move_uploaded_file($temp, $UploadFolder . "/" . $name);
            } else {
                array_push($errors, FALSE);
                return $errors;
            }
        }
        return $uploadedFiles;
    }

    public function getUser() {
        $user_id = $this->ticket_id;
        $result = $this->conn->query("SELECT * FROM `tbl_users` WHERE id = '$user_id'");
        while ($row = $result->fetch_assoc()) {
            $_SESSION['ticket_user'] = $row;
        }
    }

    public function tickets() {
        $user_id = $this->ticket_id;
        $result = $this->conn->query("SELECT count(id) as total FROM `support_ticket` WHERE user_id = '$user_id' AND is_open = '0'");
        $total = 0;
        while ($row = $result->fetch_assoc()) {
            $total = $row['total'];
        }
        return $total;
    }

    public function closed() {
        $user_id = $this->ticket_id;
        $result = $this->conn->query("SELECT count(id) as total FROM `support_ticket` WHERE user_id = '$user_id' AND is_open = '1'");
        $total = 0;
        while ($row = $result->fetch_assoc()) {
            $total = $row['total'];
        }
        return $total;
    }

    public function getOpen() {

        $user_id = $this->ticket_id;

        $sql = "SELECT  count(*) as total FROM `support_ticket` WHERE user_id = '$user_id'";
        $count = $this->conn->query($sql)->fetch_assoc()['total'];


        // Initialize a Data Pagination with previous count number
        $pagination = new \yidas\data\Pagination([
            'totalCount' => $count,
        ]);

        $offset = $pagination->offset;
        $limit = $pagination->limit;



        $query = $this->conn->query("SELECT support_ticket.id, support_ticket.user_id, support_ticket.subject, support_ticket.created,support_ticket.is_open,tbl_users.fname,tbl_users.lname FROM`support_ticket` INNER JOIN `tbl_users` ON tbl_users.id = support_ticket.user_id WHERE support_ticket.user_id = '$user_id'  ORDER BY support_ticket.id DESC LIMIT $offset ,$limit");
        if ($query->num_rows > 0) {

            \yidas\widgets\Pagination::widget([
                'pagination' => $pagination
            ]);
            return $query;
        } else {
            return null;
        }
    }

    public function getTicketMsg($mesage_id) {
        $user_id = $this->ticket_id;
        $query = $this->conn->query("SELECT * FROM `support_ticket` WHERE id = '$mesage_id' AND user_id = '$user_id'");
        if ($query->num_rows > 0) {
            return $query;
        } else {
            echo "empty data";
        }
    }

    public function reply_ticket($user_id, $ticket_id, $user, $msg, $attachments) {


        if (empty($_POST[$user_id]) || empty($_POST[$msg]) || empty($_POST[$user])) {
            echo "<p class='error'>All the fields are required</p>";
        } else if (strlen($_POST[$msg]) < 5) {
            echo "<p class='error'>Your message length should be greater than 5 characters</p>";
        } else {

            $user_id = $_POST[$user_id];
            $user = $_POST[$user];
            $ticket_id = $_POST[$ticket_id];
            $msg = $this->conn->real_escape_string($_POST[$msg]);
            $filearr_name = $this->add_attachmets($attachments);

            foreach ($filearr_name as $fileerror) {

                if ($fileerror != FALSE) {
                    echo "<p class='success'>File attached successfully.</p>";
                } else {
                    echo "<p class='error'>$fileerror</p>";
                }
            }

            $ifilePath = implode(",", $filearr_name);

            if ($this->conn->query("INSERT INTO `reply_ticket`( `user_id`,`ticket_id`, `message`, `attachs`, `user`) VALUES('$user_id','$ticket_id','$msg','$ifilePath','$user')")) {
                $ticket_number = $this->conn->insert_id;
                return $ticket_number;
            }
        }
    }

    public function getRepyTicketMsg($mesage_id) {
        $user_id = $this->ticket_id;
        $query = $this->conn->query("SELECT * FROM `reply_ticket` WHERE ticket_id = '$mesage_id' AND user_id = '$user_id'");
        if ($query->num_rows > 0) {
            return $query;
        } else {
            return FALSE;
        }
    }

    public function final_solution($mesage_id) {
        $user_id = $this->ticket_id;
        $query = $this->conn->query("SELECT * FROM `__reply_ticket` WHERE msg_id = '$mesage_id' AND user_id = '$user_id'");
        if ($query->num_rows > 0) {
            return $query;
        } else {
            return FALSE;
        }
    }

}
