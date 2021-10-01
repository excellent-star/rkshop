<?php 



class Utilisateur{
    private $userId;
    private $userName;
    private $userPrenom;
    private $userMiddleName;
    private $userPassword;
    private $userEmail;
    private $userCreatedDate;
    private $userUpdatedDate;
    private $userMobile;
    private $userLastLogin;
    private $userIntro;
    private $userProfile;
    private $userField;
    private $userVideo;
    private $userWebsite;
    private $userSkeype;
    private $userAddress;
    private $userCv;
    private $userLocationMap;
    private $userCoverImage;
    private $userRole;
    
    public function __construct(array $donnees){
    $this->hydrate($donnees);
    }
    
    public function hydrate(array $donnees){
    foreach($donnees as $key => $value){
    $method = 'set'.ucfirst($key);
    if(method_exists($this, $method))
    {
    $this->$method($value);
    }
    }
    }
    
    public function getUserId(){
    return $this->userId;
    }
    
    public function getUserName(){
    return $this->userName;
    }
    
    public function getUserPrenom(){
    return $this->userPrenom;
    }
    
    public function getUserMiddleName(){
    return $this->userMiddleName;
    }
    
    public function getUserPassword(){
    return $this->userPassword;
    }
    
    public function getUserEmail(){
    return $this->userEmail;
    }
    
    public function getUserCreatedDate(){
    return $this->userCreatedDate;
    }
    
    public function getUserUpdatedDate(){
    return $this->userUpdatedDate;
    }
    
    public function getUserMobile(){
    return $this->userMobile;
    }
    
    public function getUserLastLogin(){
    return $this->userLastLogin;
    }
    
    public function getUserIntro(){
    return $this->userIntro;
    }
    
    public function getUserProfile(){
    return $this->userProfile;
    }
    
    public function getUserField(){
    return $this->userField;
    }
    
    public function getUserVideo(){
    return $this->userVideo;
    }
    
    public function getUserWebsite(){
    return $this->userWebsite;
    }
    
    public function getUserSkeype(){
    return $this->userSkeype;
    }
    
    public function getUserAddress(){
    return $this->userAddress;
    }
    
    public function getUserCv(){
    return $this->userCv;
    }
    
    public function getUserLocationMap(){
    return $this->userLocationMap;
    }
    
    public function getUserCoverImage(){
    return $this->userCoverImage;
    }
    
    public function getUserRole(){
    return $this->userRole;
    }
    
    
    public function setUserId($userId){
    $this->userId=$userId;
    }
    
    public function setUserName($userName){
    $this->userName=$userName;
    }
    
    public function setUserPrenom($userPrenom){
    $this->userPrenom=$userPrenom;
    }
    
    public function setUserMiddleName($userMiddleName){
    $this->userMiddleName=$userMiddleName;
    }
    
    public function setUserPassword($userPassword){
    $this->userPassword=$userPassword;
    }
    
    public function setUserEmail($userEmail){
    $this->userEmail=$userEmail;
    }
    
    public function setUserCreatedDate($userCreatedDate){
    $this->userCreatedDate=$userCreatedDate;
    }
    
    public function setUserUpdatedDate($userUpdatedDate){
    $this->userUpdatedDate=$userUpdatedDate;
    }
    
    public function setUserMobile($userMobile){
    $this->userMobile=$userMobile;
    }
    
    public function setUserLastLogin($userLastLogin){
    $this->userLastLogin=$userLastLogin;
    }
    
    public function setUserIntro($userIntro){
    $this->userIntro=$userIntro;
    }
    
    public function setUserProfile($userProfile){
    $this->userProfile=$userProfile;
    }
    
    public function setUserField($userField){
    $this->userField=$userField;
    }
    
    public function setUserVideo($userVideo){
    $this->userVideo=$userVideo;
    }
    
    public function setUserWebsite($userWebsite){
    $this->userWebsite=$userWebsite;
    }
    
    public function setUserSkeype($userSkeype){
    $this->userSkeype=$userSkeype;
    }
    
    public function setUserAddress($userAddress){
    $this->userAddress=$userAddress;
    }
    
    public function setUserCv($userCv){
    $this->userCv=$userCv;
    }
    
    public function setUserLocationMap($userLocationMap){
    $this->userLocationMap=$userLocationMap;
    }
    
    public function setUserCoverImage($userCoverImage){
    $this->userCoverImage=$userCoverImage;
    }
    
    public function setUserRole($userRole){
    $this->userRole=$userRole;
    }
    
    }


?>