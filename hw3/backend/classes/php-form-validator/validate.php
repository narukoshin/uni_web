<?php
    /**
     * @author 湖心なる (naru.koshin@outlook.jp)
     * @github https://www.github.com/narukoshin
     * @instagram https://www.instagram.com/naru.koshin
     * @site https://www.narukoshin.me
     * 
     */
    class Validator {
        /**
         * If the validation failed, the error will be set to true and we will print out the error message.
         * Default set to false
         * 
         * @var bool
         */
        private $error = false;
        /**
         * There will be stored the error message if the validation failed
         * 
         * @var string
         */
        private $message;
        /**
         * Language list that is allowed
         * 
         * @var array
         */
        private $languages = ["english", "japanese"];
        /**
         * Checking if in our validation is any error.
         * If there is any error then we will print out the error message
         * 
         * @return false|$this
         * 
         */
        public function hasError(){
            // if the error ir set to true, then we will return the objected array with message
            if ($this->error){
                // returning back only error message fow now
                return (object)[
                    "message" => $this->message()
                ];
            }
            // If error is set to false, then printing out false.
            return false;
        }
        /**
         * Setting the error, because there is 2 variables that need to be set
         * 
         * @param string $message   The error message that will be printed out
         * 
         * @return void
         */
        public function setError(string $message){
            // Setting the error to true
            $this->error = true;
            // Setting the error message
            $this->message = $message;
        }
        /**
         * Printing out the error message if the validation was failed.
         * 
         * @return $this->message
         */
        public function message(){
            return $this->message;
        }
        /**
         * Testing the email, if the email is in the correct format
         * 
         * @return $this
         */
        public function email(string $email) {
            // Checking if the email is in the correct format
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                // Setting the error
                $this->setError("The email is in the wrong format!");
            }
            return $this;
        }
        /**
         * Testing if there is the right gender selected and the gender value is not edited to something else
         * 
         * @param string $gender    The gender value
         * 
         * @return $this
         */
        public function gender(string $gender){
            $allowed = ["male", "women"];
            if (!in_array(strtolower($gender), $allowed)){
                $this->setError("You selected the wrong gender or the gender that does not exist!");
            }
            return $this;
        }
        /**
         * Testing if the user submitted language is in our list.
         * If the user submitted language is not in our list, then we will throw an error.
         * 
         * @param string $language
         * 
         * @return $this
         */
        public function language(string $language){
            $this->push("japanese")->push("english")->push("russian")->push("mandarin");
            if (!in_array($language, $this->languages)){
                $this->setError("This language is not in our list.");
            }
            return $this;
        }
        /**
         * Pushing the language to the allowed list
         * 
         * @param string $language
         * 
         * @return $this
         */
        private function push(string $language){
            array_push($this->languages, $language);
            return $this;
        }
        /**
         * Custom validation function
         * 
         * @param callable $call    the function where will be validation code
         * @return $this
         */
        public function custom(callable $call){
            $call($this);
            return $this;
        }
    }
