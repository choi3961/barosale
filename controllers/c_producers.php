<?php
/*
    This class is for filtering against the producers'(farmers') webpages.
    It filters the pages according to the areas(bigger and smaller) or categories 
    of agricultural products.
*/
class producers_controller extends base_controller{
    
	public function __construct(){
		parent::__construct();
	}

    /*
        This is for filtering the total webpages according to numbers of webpages(30~60)
    */
    public function total_part($part){
        $q="SELECT 
            domain_address,
            name
            FROM sites;";

        # Run the query
        $posts = DB::instance(DB_NAME)->select_rows($q);

        $this->template->content = View::instance('v_index_index');
        $this->template->content->content02 = View::instance('v_producers_total_part');
        $this->template->content->content02->kk=$posts;
        $this->template->content->content02->loc_num = $part; 
        //$this->template->title   = "Update"; 
        echo $this->template;      
    }

    /*
        This filters the domains of producers(farmers) accroding to the local area.
        It works when the navigator at the header part is clicked.
    */
	public function local($part){
        //$temp = $_POST['local'];
        //echo $temp;
        $q="SELECT 
            domain_address,
            name
            FROM sites
            WHERE local = '$part';";

        # Run the query
        $posts = DB::instance(DB_NAME)->select_rows($q);

        $this->template->title = "Direct Deal";
        $this->template->content = View::instance('v_index_index');
        $this->template->content->content02 = View::instance('v_producers_local');
        $this->template->content->content02->local=$posts;
        $this->template->content->content02->part = $part;

        echo $this->template;
    }

    /*
        This filters the domains of producers(farmers) accroding to the local area.
        It works when the navigator of numbers at the bottom is clicked.
    */
    public function local_part($part){
        //$temp = $_POST['local'];
        //echo $temp;
        $q="SELECT 
            domain_address,
            name
            FROM sites
            WHERE local = 'local';";

        # Run the query
        $posts = DB::instance(DB_NAME)->select_rows($q);

        $this->template->content = View::instance('v_index_index');
        $this->template->content->content02 = View::instance('v_producers_local_part');
        $this->template->content->content02->kk=$posts;
        $this->template->content->content02->loc_num = $part;
        echo $this->template;
    }

    /*
        This filters the domains of producers(farmers) accroding to the local area.
        It works when the navigator at the header part is clicked.
        (smaller local area than local() function)
    */
    public function local02($part){
        $q="SELECT 
            domain_address,
            name
            FROM sites
            WHERE local02 = '$part';";

        # Run the query
        $local02 = DB::instance(DB_NAME)->select_rows($q);

        $this->template->content = View::instance('v_index_index');
        $this->template->content->content02 = View::instance('v_producers_local02');
        $this->template->content->content02->local=$local02;

        echo $this->template;
    }

    /*
        This filters the domains of producers(farmers) accroding to the local area.
        It works when the navigator of numbers at the bottom is clicked.
        (smaller local area than local() function)
    */
    public function local02_part($part){
       $temp = $_POST['local02'];
        $q="SELECT 
            domain_address,
            name
            FROM sites
            WHERE local02 = '$temp';";

        # Run the query
        $local02 = DB::instance(DB_NAME)->select_rows($q);

        $this->template->content = View::instance('v_index_index');
        $this->template->content->content02 = View::instance('v_producers_local02_part');
        $this->template->content->content02->local=$local02;

        echo $this->template;
    }

    /*
        This filters the producers'(farmers') domain addresses accroding to the category
        of the products.
    */
    public function category02($part){
        $this->template->title   = "Direct Deal";
        $this->template->content = View::instance('v_index_index');
        $this->template->content->content02 = View::instance('v_producers_category02');//'v_producers_category02'
        //$temp = $_POST['category02'];

        $q="SELECT 
            domain_address,
            name
            FROM sites
            WHERE category02 = '$part';";

        # Run the query
        $posts = DB::instance(DB_NAME)->select_rows($q);
        $this->template->content->content02->category02=$posts;
        
        echo $this->template;
    } 

    /*
        This filters the domains of producers(farmers) accroding to the category of products.
        It works when the navigator of numbers at the bottom is clicked.
        (smaller local area than local() function)
    */
    public function category02_part($part){
        $this->template->content = View::instance('v_index_index');
        $this->template->content->content02 = View::instance('v_producers_category02_part');
        $temp = $_POST['category02'];

        $q="SELECT 
            domain_address,
            name
            FROM sites
            WHERE category02 = '$temp';";

        # Run the query
        $posts = DB::instance(DB_NAME)->select_rows($q);
        $this->template->content->content02->local=$posts;
        //$this->template->content->loc_num = $loc;
        
        echo $this->template;
    } 

    /*
        This is not for filtering. This is for the register of domain address.
        This renders the interface of sites_register
    */
    public function sites_register($error = NULL) {
        # Setup view
        $this->template->content = View::instance('v_producers_register');
        $this->template->title = "Sites_Register";
        $this->template->content->error = $error;
           
        # Render template
        echo $this->template;
    }


    # renders interface of sign up
    public function p_sites_register($error = NULL) {
        #error checking : if not fullfilled, send the error message.
        if(!$_POST['name']||!$_POST['domain_address']||!$_POST['email'] || !$_POST['password'] ){
            Router::redirect("/users/signup/error");
        }

        #error checking : compare POST data with database data
        $domain_address = $_POST['domain_address'];

        $q = "select domain_address from sites
             where domain_address = '$domain_address'";
        $exist = DB::instance(DB_NAME)->select_field($q);

        //compare POST with database already registered
        if($exist==$domain_address){
            Router::redirect('/users/signup/failed');
        }
        
        # More data we want stored with the sites
        //$_POST['created']  = Time::now();
        //$_POST['modified'] = Time::now();

        # Encrypt the password  
        $_POST['password'] = sha1(PASSWORD_SALT.$_POST['password']);            

        # Create an encrypted token via their email address and a random string
        //$_POST['token'] = sha1(TOKEN_SALT.$_POST['email'].Utils::generate_random_string());

        # Insert this user into the database
        $user_id = DB::instance(DB_NAME)->insert('sites', $_POST);

        echo "your site is registered";
    }
    # Shows farmers posts.
    public function farmers_posts() {
        # Set up the View
        $this->template->content = View::instance('v_producers_farmers_posts');

        $this->template->title   = "Farmers' Posts";

        # Build the query to show the posts which the user follows the posters of
        $q="SELECT 
            posts.content,
            posts.created,
            posts.user_id,
            users.first_name,
            users.last_name
            FROM posts
            INNER JOIN users
                ON posts.user_id = users.user_id";

        # Run the query
        $posts = DB::instance(DB_NAME)->select_rows($q);
 
        # Pass data to the View
        $this->template->content->posts = $posts;

        # Render the View
        echo $this->template;        
    }    
}

