<?php

/**
 * Exercise 1
 * @author Pham Van Long
 */
class Exercise1
{
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
     * Count the number of sentences in the String
     * @param string $str
     * @return string
     */
    public function sentenceCount($str)
    {
        $count = 0;
        if ($this->checkValidString($str)) {
            $count = substr_count($str, '.');
            return "Chuỗi hợp lệ và có số câu là: $count <br>";
        }
        return "Chuỗi không hợp lệ <br>";
    }
}
