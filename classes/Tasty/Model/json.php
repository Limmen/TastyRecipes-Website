<?php
class json implements \JsonSerializable {

    private $username;
    private $newComment;
    

    /**
     * 
     * @param stdClass $entry_data A DTO with the fields <code>author</code> 
     *                             and <code>msg</code>. The msg field may contain multiple lines. 
     *                             The lines must be separated by a newline character 
     *                             (ASCCI code 10).
     */
    public function __construct($entry_data) {
        $this->username = $entry_data->username;
        $this->newComment = $entry_data->newComment;
        
    }

    /**
     * @return string The author's nick name.
     */
    public function getUsername() {
        return $this->username;
    }

    /**
     * @return array An array where each element is a line in the message.
     */
    public function getComment() {
        return $this->newComment;
    }

    /**
     * @return int The time when this entry was submitted.
     */
  

    /**
     * Create a JSON representation of this object.
     * 
     * @return \StdClass An object of an anonymous class that contains all properties of this object
     *                   and can be encoded with \json_encode. 
     */
    public function jsonSerialize() {
        $json_obj = new \stdClass;
        $json_obj->username = $this->username;
        $json_obj->newComment = $this->newComment;
        return $json_obj;
    }

}

