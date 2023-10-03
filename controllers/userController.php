<?php
require_once "../models/userModel.php";
class userController
{
    public static function loadModel($action, $data = null)
    {
        switch ($action) {
            case "getuserlist":
                //appel de la methode getUserList
                UserModel::getUserList();
                break;
            case "getListMessage";
                //appel de la fonction getlistmessage
                UserModel::getListMessage($data[0], $data[1]);
                break;
            case "login":
                UserModel::login($data[0], $data[1]);
                break;
            //appel de la fonction register
            case "register":
                UserModel::register($data[0], $data[1], $data[2], $data[3]);
                break;
            case "send message";
                //appel de la function sendmessage
                UserModel::sendMessage($data[0], $data[1], $data[2]);
            default:
                echo json_encode([
                    "status" => 404,
                    "message" => "service not found..."
                ]);



        }
    }
}