<?php

namespace App\Http\Controllers;

use App\Facades\ProdManagUtils;
use App\Facades\UserMg;
use App\FormInfo\GammeContentInfo;
use App\FormInfo\UserAddressInfo;
use App\FormInfo\UserInscriptionInfo;
use App\Models\Gamme;
use App\Models\Produit;
use App\Models\Teint;
use App\Models\User;
use App\Models\UserAddress;
use App\Utils\Parser;
use App\Utils\UserManagementUtils;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ApiUserManagement extends Controller
{
    //



    public function doUserInscription(Request $request,Response $response):int{

        $userInscription = new UserInscriptionInfo();

        $userInscription->setRequest($request);

            $userInscription->isValid();

            $userID  = UserMg::saveUser($userInscription);

            return ["user_id"=>$userID];
    }

    public function getUserAddressList(Request $request){

        $userID = $request->id;

        if(!empty($userID) && $userID != -1){

            UserAddress::where("user_id",$userID);

        }

    }

    public function deleteUserAddressItem(Request $request){

        $userID = $request->id;

        $adresse = UserAddress::find($userID);

        $adresse->delete();

    }

    public function editUserAddressItem(Request $request){

            $userAddressInfo = new UserAddressInfo($request);

            if($userAddressInfo->isValidFormInfo()){

                $userAddress = UserAddress::find($request->user_id);

                UserMg::editUserAddress($userAddress,$userAddressInfo);

            }

            else{

            }

    }

    public function getCommandeDetail(){

    }

    public function getCommandeUserList($userID){

        $user = User::find($userID);

        $commandes = UserMg::getUserCommande($user);

        return Parser::parseCommandes($commandes);
    }

    public function addProduitToFavorite(Request $request){

        $productID = $request->produitID;
        $userID = $request->userID;

        UserMg::addProductToFavorite(Produit::find($productID),User::find($userID));
    }

    public function removeProductFromFavorite(Request $request){

        $productID = $request->produitID;
        $userID = $request->userID;

        UserMg::addProductToFavorite(Produit::find($productID),User::find($userID));
    }

    public function cancelCommande($commandeID){


    }

    public function getTeintList(){

        $teints = Teint::all();

        return Parser::parseTeintList($teints);
    }

    public function getGammeList(){

        $gammes = Gamme::all();

        return Parser::parseCommandes($gammes);
    }

    public function getGammeContentList(Request $request){

        $gammeContentFormInfo = new GammeContentInfo($request);

        if($gammeContentFormInfo->isValidFormInfo()){

            $gammeContent = ProdManagUtils::getProductList($gammeContentFormInfo);

            return Parser::parseProducts($gammeContent);
        }

        else{


        }

        return json_encode(["error"=>"1"]);
    }


    public function valideUserInscription(int $userID,String $validationKey):int{



        return -1;
    }





}
