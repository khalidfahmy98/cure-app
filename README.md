# Cure Repository Reference


Hello , 

notice that in this repo there are the following directories : 
    1- cure-auth 
    2- cure-app 
    3- cure-api 


# Cure-auth 

    in this directory all the inner folders and files  made for cure non patient users dashboards and control panels 
    like : 
        - doctors 
        - hospitals 
        - clinics 
        - factories 
        ..etc as we discuess @ the documentation before 

# Cure-app
    This directory includes all website application files ( front end + back end  ) used to splitted all the front end code into smaller views 
    classes used to have got all model connections with the db tables and user data 
    controllers have got all the controlling filed that respond with status and data for each AJAX call 
    also assets => includes all the css and styling files for the front end  
    core - function - includes are directories for splitting the project into views and oop structure 
    while all requests and responds in the live preview used to include SCRIPTS directory hold up all js AJAX codes for the requests .

# Cure-api 

    in this directory all the inner folders and files  made for the api to the android developer 
    each api controller will be associated to sepcial directory for example if you want to add new user to the system ! 
    
    api tokens ? 
        means that you have to send request variable names with the same name after ( => ) sign 
        
    change 192.168.1.1 with your local machine ip address while  xampp running 

    Main Apis Token for security  : k0wsTJMxatMYSe64n8nTGTCslvOO6GEE  => Sent for this vairable (   token   ) 
--------------------------------------------------------------------------
    Patients Apis's : 
    1 - Add user ( register ) :  192.168.1.1/cure-app/cure-api/users/add.php
        Api Tokens : 
            - username      => patient_username
            - password      => p_password
            - email         => patient_email
            - gender        => p_gender 
            - nationality   => p_natio
            - phone number  => patient_phone

    2 - Login :                 192.168.1.1/cure-app/cure-api/users/login.php
        Api Tokens : 
            - username      => patient_username
            - password      => patient_password 
            
    2 - Info  :                 192.168.1.1/cure-app/cure-api/users/info.php
        Api Tokens : 
        - patient_id      => send to this token variable the username or user id that he used while logging in to 
                             get the rest of information 

        this api will list you the following data with the same keys name in the json object to use 
            id 
            username
            email
            phone
            gender 
            birthdate
            nationality
            address
            coins
            donation
            account
            password


# Notices  
    1- to create pharmacy orgnization or clinic you have to be doctor account type 
    2- to create factory or laborator you have to be worker account or higher rank account means doctor also .
    3- cure workers - doctors can use the platform with thier cardintials by login as worker account . but not as orgnization .
    4- creating account is the same to all after creating the account the user choose his interstings after using the platform .
# Flags Reference 
    -> cure_users ( includes  all as patients then inside the platform they switch into thier buisness ) <-
        1- patient_gender                     default is ( 0 )  = Male         and ( 1 ) = Female 
        2- patient_donation_status            default is ( 0 )  = Available for donate           and ( 1 ) Not Available for donate 
        3- patient_account_status             default is ( 0 )  = Active Account       and ( 1 ) Blocked Account  
        4- worker_account_type                default is ( 0 )  = patient account     (1) Worker Account           ( 2 ) = Doctor Account 
--------------------------------------------------------------------------
    ->   Workers Category Table   <-
        1- category_premission_type  : 
             -  0 => no permission garanted                      
                (permission operations ) =>  

             -  1 => Main Orgnization Manager 
                (permission operations ) => 

             -  2 => Branch Manager 
                (permission operations ) =>

             -  3 => Editor 
                (permission operations ) => 

             -  4 => Moderator  
                (permission operations ) => 
--------------------------------------------------------------------------
    ->  Cure Organizations  Table   <-
        1- org_work_type               ( 0 ) not set   -       ( 1 ) pharmacy     - ( 2 ) Factory    
                                       ( 3 ) Laboratory  -      ( 4 ) Clinic 
        2- org_status                  ( 0 ) pending to accepted      - ( 1 ) approved   
                                       ( 2 ) Hold Actions             - ( 3 ) Banned 
--------------------------------------------------------------------------
    ->    Medical File Table    <-
        1- patient_smoker           ( 0 ) Not Smoker            - ( 1 )Smoker 
        2- patient_surgery          ( 0 ) Had No Sugery         -  ( 1 ) Yes Had Surgeries
--------------------------------------------------------------------------
    ->    Donation_requests Table    <-
        1- donate_status           ( 0 ) pending requests            - ( 1 ) closed requests  
--------------------------------------------------------------------------
    ->   authorized_products Table    <-
        1- product_tap_or_drink           ( 0 ) not tap not drink             - ( 1 ) tap treatment    -  ( 2 ) drink treatment 
        2- product_status                 ( 0 ) active to market             - ( 1 ) banned from market  
--------------------------------------------------------------------------
    ->   orgnization_clinic_details Table    <-
        1- clinic_status           ( 0 ) active clinic              - ( 1 )  banned  clinic    
