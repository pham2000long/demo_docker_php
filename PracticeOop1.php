<?php

/**
 * Class ExerciseString
 * 
 * ==== Properties
 * @property $Check1
 * @property $Check2
 * 
 * ==== Methods
 * @method readFile
 * @method checkValidString
 * @method writeFile
 * @method convertInfoToString
 * @method sentenceCount
 */
class ExerciseString
{
    private $check1;
    private $check2;

    /**
     * Read file
     * @param string $file
     * @return string
     */
    public function readFile($file)
    {
        $fp = @fopen($file, "r");

        // Kiểm tra file mở thành công không
        if (!$fp) {
            return "ko doc dc file";
        }
        // Đọc file và trả về nội dung
        $data = fread($fp, filesize($file));
        fclose($fp);
        return $data;
    }

    /**
     * Check validate string
     * @param string $str
     * @return bool
     */
    public function checkValidString($str)
    {
        return (!empty($str) && strpos($str, 'book') !== false xor strpos($str, 'restaurant') !== false);
    }

    /**
     * Write file
     * @param string $file
     * @param string $str
     */
    public function writeFile($file, $str){
        $fh = fopen($file, 'w');
        fwrite($fh, $str);
        fclose($fh);
    }

    /**
     * Convert Info to String
     * @param bool $check
     * @return string
     */
    public function convertInfoToString($check){
        return $check ? 'Hợp lệ' : 'Không hợp lệ';
    }

    /**
     * Count the number of sentences in the String
     * @param string $str
     * @return int
     */
    public function sentenceCount($str)
    {
        $count = 0;
        if ($this->checkValidString($str)) {
            $count = substr_count($str, '.');
            return $count;
        }
        return $count;
    }

    public function __set($key, $value)
    {
        //kiểm tra xem trong class có tồn tại thuộc tính không
        if (property_exists($this, $key)) {
            //tiến hành gán giá trị
            $this->$key = $value;
        } else {
            die('Không tồn tại thuộc tính');
        }
    }

    public function __get($key)
    {
        //kiểm tra xem trong class có tồn tại thuộc tính không
        if (property_exists($this, $key)) {
            //tiến hành lấy giá trị
            return $this->$key;
        } else {
            die('Không tồn tại thuộc tính');
        }
    }
}

$object1 = new ExerciseString();
$str1 = $object1->readFile('file1.txt');
$str2 = $object1->readFile('file2.txt');

$object1->Check1 = $object1->checkValidString($str1);
$object1->Check2 = $object1->checkValidString($str2);

$str = 'check1 là chuỗi \"';
$str .= $object1->convertInfoToString($object1->check1) . "\"\n";
$str .= 'check2 là chuỗi \"';
$str .= $object1->convertInfoToString($object1->check2) . "\". ";
$str .= 'Chuỗi có ' . $object1->sentenceCount($object1->check2) . ' câu.';

$object1->writeFile('result_file.txt', $str);


