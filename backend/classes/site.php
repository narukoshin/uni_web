<?php
    class Site {
        /**
         * @var array
         */
        private array $pages = [];
        /**
         * @var string
         */
        private string $default_page;
        /**
         * @var string
         */
        private $current;
        /**
         * @var string
         */
        private string $pages_folder;
        /**
         * @return void
         */
        public function __construct() {
            $this->current = $_GET["page"] ?? "";
        }
        /**
         * Creates the pages of the site
         *
         * @return $this
         */
        public function create_pages() {
            return $this;
        }
        /**
         * Adds a page to the site
         *
         * @param string $name the name of the page
         * @return $this
         */
        public function add(string $name) {
            // Adding page to the array if isn't already there
            if (!in_array($name, $this->pages)) {
                $this->pages[] = $name;
            }
            return $this;
        }
        /**
         * Setting default page
         * 
         * @param string $page_name Name of the page to set as the default page
         * @return $this
         */
        public function set_default(string $page_name) {
            if (!in_array($page_name, $this->pages)) {
                $this->pages[] = $page_name;
            }
            $this->default_page = $page_name;
            return $this;
        }
        /**
         * Loading a page
         * 
         * @param string $page_name
         * @return void
         */
        private function load_page(string $page_name) {
            // Checking if the exact page exists in the pages folder.
            $page_file = sprintf("%s/%s.php", $this->pages_folder, $page_name);
            if (!file_exists($page_file)) {
                echo json_encode(["status_code" => "404", "error_message" => sprintf("Page file '%s' does not exist", $page_name)]);
                return http_response_code(404);
            }
            // Including page file.
            $site = $this;
            include_once $page_file;
        }
        /**
         * Start showing the pages
         * 
         * @return void
         */
        public function show(string $load_folder){
            $this->pages_folder = $load_folder;
            // if page parameter is empty
            // showing the default page
            if ($this->current == "") 
                return $this->load_page($this->default_page);
            return $this->load_page($this->current);
        }
        /**
         * Parse form from the home
         * 
         * @return $form|false
         */
        public function ParseForm(){
            $form = (object)$_POST;
            // Check if any of the data is empty
            $author = sprintf("%s %s", $form->firstname, $form->lastname);
            $validate = new Validator;
            $validate->email($form->email)
                ->custom(function($d) use ($author){
                    if (!preg_match("/[a-zA-Z]+(?:-[a-zA-Z]+)*/", $author)) {
                        $d->setError("Name is not valid");
                    }
                 });
            if ($validate->hasError()) return;
            return $form;
        }
    }