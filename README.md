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
--------------------------------------------------------------------------
    Patients Apis's : 
    1 - Add user ( register ) :  192.168.1.1/cure-app/cure-api/users/add.php
    

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
