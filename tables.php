<?php
    require_once("dbconn.php");
?>

<!DOCTYPE html>
<html ng-app="resto">
    <head>
        <?php require_once("head.php"); ?>      
    </head>
    <body class="el-table-page">
        <div class="background-img-table">
            <nav class="el-nav unselectable">
                <span class="el-logo-nav"><img class="el-img" src="img/el-banner.png"></span>
                <span class="el-user-nav" id="header-user-click">
                    John Doe <i class="fa fa-user fa-fw"></i><i class="fa fa-caret-down"></i>
                </span>
                <ul class="unselectable" id="header-drop-down">
                    <li><a href="#"><i class="fa fa-user"></i> User Profile</a></li>
                    <li><a href="#"><i class="fa fa-sign-out"></i> Logout</a></li>
                </ul>
            </nav>
            <h2 class="el-page-header">
                Table Status
            </h2>
            <div class="table-status-select">
                <span style="color:white">View:</span>
                <select>
                    <option>All</option>
                    <option>Occupied</option>
                    <option>Unoccupied</option>
                    <option>Reserved</option>
                </select>
            </div>
            <div class="table-list">
                <a>
                    <figure>
                        <table class="table-resto table-reserved">
                            <tr>
                                <td class="table-resto-td1">1</td>
                                <td class="table-resto-td2">
                                    <img class="img-table-customer el-img" src="./img/customer.png">
                                    <img class="img-table-customer el-img" src="./img/customer.png">
                                    <br>
                                    <img class="img-table-customer el-img" src="./img/customer.png">
                                    <img class="img-table-customer el-img" src="./img/customer.png">
                                </td>
                            </tr>
                        </table>
                    </figure>
                </a>
                <a>
                    <figure>
                        <table class="table-resto table-unoccupied">
                            <tr>
                                <td class="table-resto-td1">2</td>
                                <td class="table-resto-td2">
                                    <img class="img-table-customer el-img" src="./img/customer.png">

                                </td>
                            </tr>
                        </table>
                    </figure>
                </a>
               <a>
                    <figure>
                        <table class="table-resto table-occupied">
                            <tr>
                                <td class="table-resto-td1">3</td>
                                <td class="table-resto-td2">
                                    <img class="img-table-customer el-img" src="./img/customer.png">
                                    <img class="img-table-customer el-img" src="./img/customer.png">
                                    <img class="img-table-customer el-img" src="./img/customer.png">
                                </td>
                            </tr>
                        </table>
                    </figure>
                </a>
                 <a>
                    <figure>
                        <table class="table-resto table-unoccupied">
                            <tr>
                                <td class="table-resto-td1">4</td>
                                <td class="table-resto-td2">
                                    <img class="img-table-customer el-img" src="./img/customer.png">
                                    <img class="img-table-customer el-img" src="./img/customer.png">
                                    <br>
                                    <img class="img-table-customer el-img" src="./img/customer.png">
                                    <img class="img-table-customer el-img" src="./img/customer.png">
                                </td>
                            </tr>
                        </table>
                    </figure>
                </a>
                <a>
                    <figure>
                        <table class="table-resto table-unoccupied">
                            <tr>
                                <td class="table-resto-td1">5</td>
                                <td class="table-resto-td2">
                                    <img class="img-table-customer el-img" src="./img/customer.png">
                                    <img class="img-table-customer el-img" src="./img/customer.png">
                                    <br>
                                    <img class="img-table-customer el-img" src="./img/customer.png">
                                    <img class="img-table-customer el-img" src="./img/customer.png">
                                </td>
                            </tr>
                        </table>
                    </figure>
                </a>

                <a>
                    <figure>
                        <table class="table-resto table-unoccupied">
                            <tr>
                                <td class="table-resto-td1">6</td>
                                <td class="table-resto-td2">
                                    <img class="img-table-customer el-img" src="./img/customer.png">
                                </td>
                            </tr>
                        </table>
                    </figure>
                </a>

                 <a>
                    <figure>
                        <table class="table-resto table-unoccupied">
                            <tr>
                                <td class="table-resto-td1">7</td>
                                <td class="table-resto-td2">
                                    <img class="img-table-customer el-img" src="./img/customer.png">
                                    <img class="img-table-customer el-img" src="./img/customer.png">
                                </td>
                            </tr>
                        </table>
                    </figure>
                </a>

                 <a>
                    <figure>
                        <table class="table-resto table-unoccupied">
                            <tr>
                                <td class="table-resto-td1">8</td>
                                <td class="table-resto-td2">
                                    <img class="img-table-customer el-img" src="./img/customer.png">
                                    <img class="img-table-customer el-img" src="./img/customer.png">
                                </td>
                            </tr>
                        </table>
                    </figure>
                </a>
                <a>
                    <figure>
                        <table class="table-resto table-unoccupied">
                            <tr>
                                <td class="table-resto-td1">9</td>
                                <td class="table-resto-td2">
                                    <img class="img-table-customer el-img" src="./img/customer.png">
                                    <img class="img-table-customer el-img" src="./img/customer.png">
                                    <br>
                                    <img class="img-table-customer el-img" src="./img/customer.png">
                                    <img class="img-table-customer el-img" src="./img/customer.png">
                                </td>
                            </tr>
                        </table>
                    </figure>
                </a>
                 <a>
                    <figure>
                        <table class="table-resto table-unoccupied">
                            <tr>
                                <td class="table-resto-td1">10</td>
                                <td class="table-resto-td2">
                                    <img class="img-table-customer el-img" src="./img/customer.png">
                                    <img class="img-table-customer el-img" src="./img/customer.png">
                                </td>
                            </tr>
                        </table>
                    </figure>
                </a>
                <a>
                    <figure>
                        <table class="table-resto table-reserved">
                            <tr>
                                <td class="table-resto-td1">11</td>
                                <td class="table-resto-td2">
                                    <img class="img-table-customer el-img" src="./img/customer.png">
                                    <img class="img-table-customer el-img" src="./img/customer.png">
                                </td>
                            </tr>
                        </table>
                    </figure>
                </a>
               <a>
                    <figure>
                        <table class="table-resto table-unoccupied">
                            <tr>
                                <td class="table-resto-td1">12</td>
                                <td class="table-resto-td2">
                                    <img class="img-table-customer el-img" src="./img/customer.png">
                                    <img class="img-table-customer el-img" src="./img/customer.png">
                                    <img class="img-table-customer el-img" src="./img/customer.png">
                                </td>
                            </tr>
                        </table>
                    </figure>
                </a>
            </div>
        </div>
    </body>
    <?php require_once("scripts.php"); ?>
</html>