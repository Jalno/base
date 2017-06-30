<?php
namespace packages\base\IO;
class buffer{
    private $buffer;
    public function __construct($buffer = null){
        $this->buffer = $buffer;
    }
    public function __destruct(){
        if($this->buffer){
            $this->close();
        }
    }
    public function close(){
        fclose($this->buffer);
        $this->buffer = null;
    }
    public function read(int $length): string{
        return fread($this->buffer, $length);
    }
    public function write(string $data): int{
        return fwrite($this->buffer, $data);
    }
}