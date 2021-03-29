<style>
    /*
            -위치-
            배경 
            모자 마스크
            목깃자켓 목자켓 
            자켓 팔자켓 셔츠자켓 지퍼
            신발
            -색상-

            #c0b498
                베이지 모자
            #d7d8dd
                그레이 모자
            rgb(46, 45, 45)
                검정 모자
            rgb(207, 42, 42)
                비건디 모자

            #c3c3c0
                지퍼색
            transparent
                투명
                
            a56878
                초코
            #474844
                카키
            black
                검정
            rgb(1, 1, 95)
                네이비

            #ebd6c0
                피부

            rgb(1, 1, 95)
                네이비
            #dbcbba
                베이지
            brown
                갈색

            383b46
                슬리퍼
    */
    
#background{
    background-color: rgb(135, 141, 141);
}
#percent{
    width: 201;height: 100.5;
    /*width=2*height*/
    margin:0 auto;
    position: relative;
    top: 63;
}
#man{
    background:red;
    background-color: /*배경*/transparent;
    width: /*넓이*/83%;
    height: /*높이*/662%;
    /*초기비율: width:176,height:662*/
    margin:0 auto;
}
#head{
    background-color: #ebd6c0;
    width: 34%;height: 13.5%;
    margin:0 auto;
}
    .hat{
        height: 44%;
        background-color: /*모자*/<?=$color_hat?>;
        display: flex;
        align-items:flex-end;
    }
        .hair{
            width:90%;height: 30%;
            margin: 0 auto;
            background-color: black;
        }
    .face{
        height: 20%;
    }
        .glasses{
            height: 85%;
            position: relative;
            top: 20%;
            display: flex;
        }
            .glasses .line{
                border-top:1px solid 
                rgb(211, 180, 8);
                border-left:1px solid 
                rgb(211, 180, 8);
                border-right:1px solid 
                rgb(211, 180, 8);
            }
                .side{
                    width: 5%;height: 0%;
                    position: relative;
                    top: 50%;
                }
                .glass.line{
                    width: 40%;height: 100%;
                    border:1px solid 
                    rgb(211, 180, 8);
                }
                .nose{
                    width: 10%;height: 0%;
                    position: relative;
                    top: 25%;
                }
    .mask{
        height: 36%;
        background-color: /*마스크*/white;
    }
#neck-center{
    margin:0 auto;
    width: 35%;
    height: 5.5%;
}
    #neck{
        display: flex;
        align-items: baseline;
        height: 100%;
    }
        .neck{
            height: 100%;
        }
            .neck.jacket{
                width: 15%;height: 83%;
                background-color: /*목깃자켓*/<?=$color_jacket?>;
            }
            .neck.skin{
                background-color: 
                #ebd6c0;
                width: 70%;
            }
                .neck.skin #box1{
                    background-color: transparent;
                    height: 30%;
                }
                .neck.skin #box2{
                    background-color: /*목자켓*/<?=$color_jacketCoveringFront?>;
                    height: 70%;
                }
#body{
    display: flex;
    height: 81%;
    background:red;
}
    #side{
        margin: 0ch;
        width: 16%;
        height: 49.38%;
    }
        #shoulder{
            background-color: /*자켓*/<?=$color_jacket?>;
            width: 100%;height:21.25%;
        }
        .arm.first{
            width: 99.5%;height: 22%;
            background-color: /*자켓*/<?=$color_jacket?>;
        }
        .arm.second{
            /*팔중*/
            width:70%;
            width: 98%;

            height: 40%;
            /*팔중*/
            background:                #ebd6c0;
            background-color: /*팔자켓*/<?=$color_jacket?>;
        }
            .right.arm{
                margin-right: auto;
                border-right:0.5px solid black;
            }
                .right.arm.second{
                    /*팔중*/
                    margin-left: 5%;
                    margin-left: 0%;
                    /*팔중*/
                    border-right:0px solid black;
                    border-right:0.5px solid black;
                }
            .left.arm{
                margin-left: auto;
                border-left:0.5px solid black;
            }
                .left.arm.second{
                    /*팔중*/
                    margin-right: 5%;
                    margin-left: auto;
                    /*팔중*/
                    border-left:0px solid black;
                    border-left:0.5px solid black;
                }
        .hand{
            background-color: #ebd6c0;
            width: 80%;height: 16%;
        }
            .right.hand{
                margin-right: auto;
                margin-left: 9%;
            }
            .left.hand{
                margin-left: auto;
                margin-right: 9%;
            }

    #middle{
        background-color: transparent;
        width: 68%;
        height: 100%;
    }
        #top{
            display: flex;
            height: 42%;
        }
            #jacket{
                background-color: /*자켓*/<?=$color_jacket?>;
                height: 100%;width: 100%;
                margin:0 auto;
            }
                #shirts{
                    background-color: /*셔츠자켓*/<?=$color_shirts?>;
                    width: 24%;height: 17%;
                    margin:0 auto;
                }
                    .jacketCoveringFront{
                        height:100%;width:100%;
                        background: <?=$color_jacketCoveringFront?>;
                    }
                .zipper{
                    background-color: /*지퍼*/#c3c3c0;
                    width: 2%;height: 82%;
                    margin:0 auto;
                }
                    .zipper.width{
                        width: 25%;height: 1%;
                        margin:0 auto;
                    }

        #pants-top{
            background-color: <?=$color_pants?>;
            width: 98%;height: 8.2%;
            margin:0 auto;
        }
        #pants-bottom{
            display: flex;
            width: 98%;height: 
            /*발상*/
            40.5%;
            /*발중
            38.6%;
            발하*/
            margin:0 auto;
        }
            .leg{
                background-color: <?=$color_pants?>;
                width: 50%;height: 100%;
            }
                .leg.right{
                    margin-left: auto;margin-right: 3%; 
                }
                .leg.left{        
                    margin-left: 3%;margin-right: auto;
                }
        #foots{
            display: flex;
            height: 
            /*발상*/
            0%;
            /*발중
            1.9%;
            발하*/
        }
            .foot{
                width: 17%;height: 100%;
                margin: 20%;
                background-color: 
                /*
                gray;
                */
                black;
            }
                .foot.right{
                    margin-top: 0;
                    margin-bottom: 0;
                    margin-right: auto;
                }
                .foot.left{        
                    margin-top: 0;
                    margin-bottom: 0;
                    margin-left: auto;
                }
        #shoes{
            display: flex;
            height: 9.26%;
        }
            .shoe{
                width: 33%;height: 100%;
                margin: 10%;
                background-color: /*신발*/<?=$color_shoes?>;
            }
                .shoe.right{
                    margin-top: 0;
                    margin-bottom: 0;
                    margin-right: auto;
                }
                .shoe.left{        
                    margin-top: 0;
                    margin-bottom: 0;
                    margin-left: auto;
                }
</style>