<?php

class WMailerHelper {
        
        const FILE_COUNTER = 'counter';
        static $counter = 0;

        /**
         * Send email to order email user
         * @param String $body
         * @param String $email
         * @return bool
         */
        static public function sendMailSuccessOrder($data) {
                $Mailer = new YiiMailer();
                $Mailer->setData(array(
                    'mailer' => $Mailer,
                ));
                $Mailer->setFrom('from@example.com', 'Ballonchiki.dev');
                self::$counter = self::getCounter() + 1;
                $Mailer->setSubject('Заказа #' . self::$counter . ' успешно создан!');
                $Mailer->setTo('denquick@gmail.com');
                
                $Mailer->setView('SuccessOrder');
                $flag = $Mailer->send();
                if ($flag)  {
                        self::putCounter();
                        return self::$counter;
                } return ;
        }
        
        /**
         * Get counter in file of counter
         * @return int
         */
        static public function getCounter() {
                if (is_file(self::FILE_COUNTER))  {
                        return (int)file_get_contents(self::FILE_COUNTER);
                } return ;
        }
        
        /**
         * Write value counnter, on file counter
         * @return integer
         */
        static public function putCounter() {
                if (is_file(self::FILE_COUNTER))  {
                        return file_put_contents(self::FILE_COUNTER ,(int)self::$counter);
                } return false;
        }

}
