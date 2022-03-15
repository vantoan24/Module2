<?php
class customException extends Exception {
    public function errorMessage(){
        $errorMsg = "Loi tai dong " . $this->getLine(). " trong File " .$this->getFile().
        ":<br>".$this->getMessage().
        "</br> is not a valid E-mail address";
        return $errorMsg;
    }
}
 
$email = "someone@example...com";
try {
    if (filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) {
        throw new customException ($email);
    }
}
catch (customException $e) {
    echo "Error: " . $e->errorMessage();
}