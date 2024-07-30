<?php
defined('BASEPATH') or exit('No direct script access allowed');

use Hybridauth\Hybridauth;
use Hybridauth\HttpClient;
use Hybridauth\User\Profile;

class LoginSocial extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        // $this->load->model('Company_model');	
        // $this->load->model('Config_model');
        // $this->load->model('Banner_model');
        // $this->load->model('Slider_model');			
        // $this->load->model('Youtube_model');			
        // $this->load->model('Products_model');			
        // $this->load->model('Category_model');
        // $this->load->model('Country_model');			
        // $this->load->model('News_type_model');			
        // $this->load->model('Products_model');			
        // $this->load->model('News_model');			
        // $this->load->model('Counter_model');
        // $this->load->model('cms/Menu_model');
        // $this->load->library('Social');
        $this->load->library('HybridauthLogin');
    }

    public function index($tags = "")
    {
        $data = array();

        $this->load->view('theme_blog_2023/social', $data);
    }



    public function loginHybrid()
    {
        $provider = $this->uri->segment(3);

        // echo HttpClient\Util::getCurrentUrl();
        // exit();

        $config = [
            'callback' => HttpClient\Util::getCurrentUrl(),
           

            /* optional : set debug mode
                'debug_mode' => true,
                // Path to file writeable by the web server. Required if 'debug_mode' is not false
                'debug_file' => __FILE__ . '.log', */

            /* optional : customize Curl settings
                // for more information on curl, refer to: http://www.php.net/manual/fr/function.curl-setopt.php
                'curl_options' => [
                    // setting custom certificates
                    CURLOPT_SSL_VERIFYPEER => true,
                    CURLOPT_CAINFO => '/path/to/your/certificate.crt',
        
                    // set a valid proxy ip address
                    CURLOPT_PROXY => '*.*.*.*:*',
        
                    // set a custom user agent
                    CURLOPT_USERAGENT => ''
                ] */
        ];

        try {

            $hybridauth = new Hybridauth($config);

            if (strtolower($provider) == "github") {
                $adapter = $hybridauth->authenticate('GitHub');
            } else if (strtolower($provider) == "google") {
                $adapter = $hybridauth->authenticate('Google');
            } else if (strtolower($provider) == "facebook") {
                $adapter = $hybridauth->authenticate('Facebook');
            } else if (strtolower($provider) == "twitter") {
                $adapter = $hybridauth->authenticate('Twitter');
            }

            $tokens = $adapter->getAccessToken();
            $userProfile = serialize($adapter->getUserProfile());
            // $userProfile = unserialize($userProfile);

            // $_SESSION['ss_token'] = $tokens;
            // $_SESSION["ss_profile"] = $userProfile;

            $this->session->set_userdata("ss_provider", $provider);
            $this->session->set_userdata("ss_token", $tokens);
            $this->session->set_userdata("ss_profile", $userProfile);

            $adapter->disconnect();

            redirect("LoginSocial/hybridCallback");

        } catch (\Exception $e) {
            echo $e->getMessage();
        }

        // $this->hybridauthlogin->login($provider);

    }
    public function hybridCallback()
    {      
        $provider = $_SESSION['ss_provider'];
        $profile = unserialize($_SESSION['ss_profile']);
        $_SESSION['ss_profile'] = $profile;     
              
        if(strtolower($provider)=="github"){
            print_r($_SESSION);
            $birthday = $profile->birthYear . '-' . $profile->birthMonth . '-' . $profile->birthDay;
            $birthday = strlen($birthday) > 2 ? $birthday : '';    
            $params = array(
                'provider' => $_SESSION['ss_provider'],
                'access_token' => $_SESSION['ss_token']['access_token'],
                'identifier' => $profile->identifier,
                'photo' => $profile->photoURL,
                'displayname' => $profile->displayName,
                'firstname' => $profile->firstName,
                'lastname' => $profile->lastName,
                'gender' => $profile->gender,
                'birthday' => $birthday,
                'email' => $profile->email,
                'phone' => $profile->phone,
                'address' => $profile->address,
                'country' => $profile->country,
                'created_at' => date('Y-m-d H:i:s')    
            );
            $this->db->insert('login', $params);

            $login_id = $this->db->insert_id();
            $_SESSION['ss_login_id']=$login_id;
            $_SESSION['ss_email']=$profile->email;

        }else if(strtolower($provider)=="google"){
            $birthday = $profile->birthYear . '-' . $profile->birthMonth . '-' . $profile->birthDay;
            $birthday = strlen($birthday) > 2 ? $birthday : '';    
            $params = array(
                'provider' => $_SESSION['ss_provider'],
                'access_token' => $_SESSION['ss_token']['access_token'],
                'identifier' => $profile->identifier,
                'photo' => $profile->photoURL,
                'displayname' => $profile->displayName,
                'firstname' => $profile->firstName,
                'lastname' => $profile->lastName,
                'gender' => $profile->gender,
                'birthday' => $birthday,
                'email' => $profile->email,
                'phone' => $profile->phone,
                'address' => $profile->address,
                'country' => $profile->country,
                'created_at' => date('Y-m-d H:i:s')    
            );
            $this->db->insert('login', $params);

            $login_id = $this->db->insert_id();
            $_SESSION['ss_login_id']=$login_id;
            $_SESSION['ss_email']=$profile->email;


        }else if(strtolower($provider)=="facebook"){
            $birthday = $profile->birthYear . '-' . $profile->birthMonth . '-' . $profile->birthDay;
            $birthday = strlen($birthday) > 2 ? $birthday : '';    
            $params = array(
                'provider' => $_SESSION['ss_provider'],
                'access_token' => $_SESSION['ss_token']['access_token'],
                'identifier' => $profile->identifier,
                'photo' => $profile->photoURL,
                'displayname' => $profile->displayName,
                'firstname' => $profile->firstName,
                'lastname' => $profile->lastName,
                'gender' => $profile->gender,
                'birthday' => $birthday,
                'email' => $profile->email,
                'phone' => $profile->phone,
                'address' => $profile->address,
                'country' => $profile->country,
                'created_at' => date('Y-m-d H:i:s')    
            );
            $this->db->insert('login', $params);

            $login_id = $this->db->insert_id();
            $_SESSION['ss_login_id']=$login_id;
            $_SESSION['ss_email']=$profile->email;

        }else if(strtolower($provider)=="twitter"){

        }

        // echo "Provider :  " . $_SESSION['ss_provider'] . "<hr>";
        // echo "Token : ";
        // print_r($_SESSION['ss_token']);
        // echo "<hr>";
        // echo "Profile : ";
        // print_r($profile);
        // echo "<hr>";

        redirect("LoginSocial/welcome");
      
    }

    public function welcome()
    {
        print_r($_SESSION);

    }

    // public function login()
    // {
    //     $connect = $this->uri->segment(3);

    //     if ($this->session->userdata('logged_user') == true) {
    //         if ($connect) {
    //             $this->load->view('welcome_message');
    //         } else {
    //             redirect(base_url('user/dashboard'));
    //         }
    //     }

    //     if ($connect == 'fb') {
    //         $this->login_facebook();
    //         $this->load->view('welcome_message');
    //     } elseif ($connect == 'twt') {
    //         $this->login_twitter();
    //         $this->load->view('welcome_message');
    //     } elseif ($connect == 'gmail') {
    //         $this->login_gmail();
    //         $this->load->view('welcome_message');
    //     } elseif ($connect == 'ldn') {
    //         $this->login_linkedin();
    //         $this->load->view('welcome_message');
    //     } elseif ($connect == 'fs') {
    //         $this->login_foursquare();
    //         $this->load->view('welcome_message');
    //     } elseif ($connect == 'yahoo') {
    //         $this->login_yahoo();
    //         $this->load->view('welcome_message');
    //     }
    // }

    // private function login_facebook()
    // {

    //     $site_url = $this->config->item('base_url');

    //     $fb_App_id = "YOUR FB APP ID";
    //     $fb_secret = "YOUR FB APP SECRET";
    //     $fb_scope = "public_profile,email,user_friends";
    //     $social_instance = new Social();
    //     $fbData = $social_instance->facebook_connect(NULL, $this->session, $site_url, $fb_App_id, $fb_secret, $fb_scope);
    //     if (!empty($fbData['redirectURL'])) {
    //         redirect($fbData['redirectURL']);
    //     } else {
    //         if (!empty($fbData['id'])) {
    //             echo "<pre>";
    //             print_r($fbData);
    //             echo "</pre>";
    //             die; /* all the data returned by facebook will be in this variable (Array). Play with it. */
    //         }
    //     }
    // }

    // private function login_twitter()
    // {
    //     $site_url = $this->config->item('base_url') . "/";
    //     $client_id = "YOUR TWITTER CLIENT ID";
    //     $client_secret = "YOUR TWITTER CLIENT SECRET";
    //     $social_instance = new Social();
    //     $twtData = $social_instance->twitter_connect($client_id, $client_secret, $site_url);
    //     if (!empty($twtData['redirectURL'])) {
    //         redirect($twtData['redirectURL']);
    //     } else {
    //         if (!empty($twtData['id'])) {
    //             echo "<pre>";
    //             print_r($twtData);
    //             echo "</pre>";
    //             die();
    //         }
    //     }
    // }

    // private function login_linkedin()
    // {
    //     $site_url = $this->config->item('base_url') . "/";
    //     $client_id = "YOUR LINKED IN CLIENT ID";
    //     $client_secret = "YOUR LINKED IN SECRET";
    //     $social_instance = new Social();
    //     $ldnData = $social_instance->linkedin_connect(NULL, $site_url, $client_id, $client_secret);
    //     if (!empty($ldnData['redirectURL'])) {
    //         redirect($ldnData['redirectURL']);
    //     } else {
    //         if (!empty($ldnData['id'])) {
    //             echo "<pre>";
    //             print_r($ldnData);
    //             echo "</pre>";
    //             die();
    //         }
    //     }
    // }

    // private function login_gmail()
    // {
    //     $site_url = $this->config->item('base_url') . "/";
    //     $client_id = "YOUR GMAIL CLIENT ID";
    //     $client_secret = "YOUR GMAIL CLIENT SECRET";
    //     $client_api_key = "GMAIL API KEY";
    //     $social_instance = new Social();
    //     $gmailData = $social_instance->gmail_connect(NULL, $site_url, $client_id, $client_secret, $client_api_key);
    //     if (!empty($gmailData['redirectURL'])) {
    //         redirect($gmailData['redirectURL']);
    //     } else {
    //         if (!empty($gmailData['email'])) {
    //             echo "<pre>";
    //             print_r($gmailData);
    //             echo "</pre>";
    //             die();
    //         }
    //     }
    // }

    // private function login_yahoo()
    // {
    //     $site_url = $this->config->item('base_url') . "/";
    //     $social_instance = new Social();
    //     $yahooData = $social_instance->yahoo_connect($site_url);
    //     if (!empty($yahooData['redirectURL'])) {
    //         redirect($yahooData['redirectURL']);
    //     } else {
    //         if (!empty($yahooData['email'])) {
    //             echo "<pre>";
    //             print_r($yahooData);
    //             echo "</pre>";
    //             die();
    //         }
    //     }
    // }

    // private function login_foursquare()
    // {
    //     $site_url = $this->config->item('base_url') . "/";
    //     $client_id = "FOURSQUARE CLIENT ID";
    //     $client_secret = "FOURSQUARE CLIENT SECRET";
    //     $social_instance = new Social();
    //     $fsData = $social_instance->foursquare_connect($client_id, $client_secret, $site_url);
    //     if (!empty($fsData['redirectURL'])) {
    //         redirect($fsData['redirectURL']);
    //     } else {
    //         if (!empty($fsData['id'])) {
    //             echo "<pre>";
    //             print_r($fsData);
    //             echo "</pre>";
    //             die();
    //         }
    //     }
    // }
}
