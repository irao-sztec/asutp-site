<?php
    namespace app\models;

    use framework\core\base\Model;
    use framework\libs\Functions;

    /**
     * Class OmProtocols
     * @package app\models
     */
    class OmProtocolsModel extends Model
    {
        /**
         * @var array
         */
        protected $fz = [];

        /**
         * @var array
         */
        protected $types = [];

        /**
         *
         */
        function u0() {
            $fz = $this->getFz();
            $types = $this->getTypes();

            if(is_numeric($_POST['fromYear']) && is_numeric($_POST['beforeYear'])) {
                $fromYear = $_POST['fromYear'];
                $beforeYear = $_POST['beforeYear'];

                if(is_numeric($_POST['fromMonth']) && is_numeric($_POST['beforeMonth']) &&
                    is_numeric($_POST['fromDay']) && is_numeric($_POST['beforeDay']) &&
                    is_numeric($_POST['fromHour']) && is_numeric($_POST['beforeHour']) &&
                    is_numeric($_POST['fromMinute']) && is_numeric($_POST['beforeMinute']) &&
                    is_numeric($_POST['fromSecond']) && is_numeric($_POST['beforeSecond'])) {
                    if($_POST['fromMonth'] < 10) {
                        $fromMonth = '0'.$_POST['fromMonth'];
                    } else {
                        $fromMonth = $_POST['fromMonth'];
                    }
                    if($_POST['beforeMonth'] < 10) {
                        $beforeMonth = '0'.$_POST['beforeMonth'];
                    } else {
                        $beforeMonth = $_POST['beforeMonth'];
                    }
                    if($_POST['fromDay'] < 10) {
                        $fromDay = '0'.$_POST['fromDay'];
                    } else {
                        $fromDay = $_POST['fromDay'];
                    }
                    if($_POST['beforeDay'] < 10) {
                        $beforeDay = '0'.$_POST['beforeDay'];
                    } else {
                        $beforeDay = $_POST['beforeDay'];
                    }
                    if($_POST['fromHour'] < 10) {
                        $fromHour = '0'.$_POST['fromHour'];
                    } else {
                        $fromHour = $_POST['fromHour'];
                    }
                    if($_POST['beforeHour'] < 10) {
                        $beforeHour = '0'.$_POST['beforeHour'];
                    } else {
                        $beforeHour = $_POST['beforeHour'];
                    }
                    if($_POST['fromMinute'] < 10) {
                        $fromMinute = '0'.$_POST['fromMinute'];
                    } else {
                        $fromMinute = $_POST['fromMinute'];
                    }
                    if($_POST['beforeMinute'] < 10) {
                        $beforeMinute = '0'.$_POST['beforeMinute'];
                    } else {
                        $beforeMinute = $_POST['beforeMinute'];
                    }
                    if($_POST['fromSecond'] < 10) {
                        $fromSecond = '0'.$_POST['fromSecond'];
                    } else {
                        $fromSecond = $_POST['fromSecond'];
                    }
                    if($_POST['beforeSecond'] < 10) {
                        $beforeSecond = '0'.$_POST['beforeSecond'];
                    } else {
                        $beforeSecond = $_POST['beforeSecond'];
                    }

                    $fromDate = $fromYear . '.' . $fromMonth . '.' . $fromDay . ' ' . $fromHour . ':' . $fromMinute . ':' . $fromSecond;
                    $beforeDate = $beforeYear . '.' . $beforeMonth . '.' . $beforeDay . ' ' . $beforeHour . ':' . $beforeMinute . ':' . $beforeSecond;
                }
            }



            $sql = 'SELECT * FROM u0_' . $fromYear . ' ';
            $isFirst = true;

            foreach($fz as $zone) {
                foreach($types as $type) {
                    if($isFirst) {
                        $sql .= " WHERE stat = '{$type}' AND fb = '{$zone}'";
                        $isFirst = false;
                    } else {

                        $sql .= " OR stat = '{$type}' AND fb = '{$zone}'";
                    }
                }
            }

            $sql .= " AND Data_sort > '{$fromDate}' AND Data_sort < '{$beforeDate}'";
            $sql .= ' ORDER BY Data_sort LIMIT 100';

            echo $sql;
            //return $sql;
        }

        /**
         *
         */
        function u1() {

            return true;
        }

        /**
         *
         */
        function u2() {

            return true;
        }


        protected function getFz() {
            if($_POST['object'] === 'unit0') {
                if(isset($_POST['u0_fz01'])) {
                    $this->fz['fz01'] = $_POST['u0_fz01'];
                }
                if(isset($_POST['u0_fz04'])) {
                    $this->fz['fz04'] = $_POST['u0_fz04'];
                }
                if(isset($_POST['u0_fz07'])) {
                    $this->fz['fz07'] = $_POST['u0_fz07'];
                }
                if(isset($_POST['u0_fz10'])) {
                    $this->fz['fz10'] = $_POST['u0_fz10'];
                }
                if(isset($_POST['u0_fz15'])) {
                    $this->fz['fz15'] = $_POST['u0_fz15'];
                }
                if(isset($_POST['u0_fz18'])) {
                    $this->fz['fz18'] = $_POST['u0_fz18'];
                }
                if(isset($_POST['u0_fz25'])) {
                    $this->fz['fz25'] = $_POST['u0_fz25'];
                }
                if(isset($_POST['u0_fz32'])) {
                    $this->fz['fz32'] = $_POST['u0_fz32'];
                }
                if(isset($_POST['u0_fz50'])) {
                    $this->fz['fz50'] = $_POST['u0_fz50'];
                }
                if(isset($_POST['u0_fz98'])) {
                    $this->fz['fz98'] = $_POST['u0_fz98'];
                }
            } elseif ($_POST['object'] === 'unit1') {
                if(isset($_POST['u1_fz01'])) {
                    $this->fz['fz01'] = $_POST['u1_fz01'];
                }
                if(isset($_POST['u1_fz02'])) {
                    $this->fz['fz02'] = $_POST['u1_fz02'];
                }
                if(isset($_POST['u1_fz03'])) {
                    $this->fz['fz03'] = $_POST['u1_fz03'];
                }
                if(isset($_POST['u1_fz04'])) {
                    $this->fz['fz04'] = $_POST['u1_fz04'];
                }
                if(isset($_POST['u1_fz05'])) {
                    $this->fz['fz05'] = $_POST['u1_fz05'];
                }
                if(isset($_POST['u1_fz06'])) {
                    $this->fz['fz06'] = $_POST['u1_fz06'];
                }
                if(isset($_POST['u1_fz07'])) {
                    $this->fz['fz07'] = $_POST['u1_fz07'];
                }
                if(isset($_POST['u1_fz08'])) {
                    $this->fz['fz08'] = $_POST['u1_fz08'];
                }
                if(isset($_POST['u1_fz09'])) {
                    $this->fz['fz09'] = $_POST['u1_fz09'];
                }
                if(isset($_POST['u1_fz10'])) {
                    $this->fz['fz10'] = $_POST['u1_fz10'];
                }
                if(isset($_POST['u1_fz11'])) {
                    $this->fz['fz11'] = $_POST['u1_fz11'];
                }
                if(isset($_POST['u1_fz12'])) {
                    $this->fz['fz12'] = $_POST['u1_fz12'];
                }
                if(isset($_POST['u1_fz50'])) {
                    $this->fz['fz50'] = $_POST['u1_fz50'];
                }
                if(isset($_POST['u1_fz98'])) {
                    $this->fz['fz98'] = $_POST['u1_fz98'];
                }
            } elseif ($_POST['object'] === 'unit2') {
                if(isset($_POST['u2_fz01'])) {
                    $this->fz['fz01'] = $_POST['u2_fz01'];
                }
                if(isset($_POST['u2_fz02'])) {
                    $this->fz['fz02'] = $_POST['u2_fz02'];
                }
                if(isset($_POST['u2_fz03'])) {
                    $this->fz['fz03'] = $_POST['u2_fz03'];
                }
                if(isset($_POST['u2_fz04'])) {
                    $this->fz['fz04'] = $_POST['u2_fz04'];
                }
                if(isset($_POST['u2_fz05'])) {
                    $this->fz['fz05'] = $_POST['u2_fz05'];
                }
                if(isset($_POST['u2_fz06'])) {
                    $this->fz['fz06'] = $_POST['u2_fz06'];
                }
                if(isset($_POST['u2_fz07'])) {
                    $this->fz['fz07'] = $_POST['u2_fz07'];
                }
                if(isset($_POST['u2_fz08'])) {
                    $this->fz['fz08'] = $_POST['u2_fz08'];
                }
                if(isset($_POST['u2_fz09'])) {
                    $this->fz['fz09'] = $_POST['u2_fz09'];
                }
                if(isset($_POST['u2_fz10'])) {
                    $this->fz['fz10'] = $_POST['u2_fz10'];
                }
                if(isset($_POST['u2_fz11'])) {
                    $this->fz['fz11'] = $_POST['u2_fz11'];
                }
                if(isset($_POST['u2_fz12'])) {
                    $this->fz['fz12'] = $_POST['u2_fz12'];
                }
                if(isset($_POST['u2_fz50'])) {
                    $this->fz['fz50'] = $_POST['u2_fz50'];
                }
                if(isset($_POST['u2_fz98'])) {
                    $this->fz['fz98'] = $_POST['u2_fz98'];
                }
            }
            return $this->fz;
        }

        /**
         * @return array
         */
        protected function getTypes() {
            if(isset($_POST['type_a'])) {
                $this->types['type_a'] = $_POST['type_a'];
            }
            if(isset($_POST['type_p'])) {
                $this->types['type_p'] = $_POST['type_p'];
            }
            if(isset($_POST['type_f'])) {
                $this->types['type_f'] = $_POST['type_f'];
            }
            if(isset($_POST['type_s'])) {
                $this->types['type_s'] = $_POST['type_s'];
            }
            if(isset($_POST['type_ss'])) {
                $this->types['type_ss'] = $_POST['type_ss'];
            }
            if(isset($_POST['type_o'])) {
                $this->types['type_o'] = $_POST['type_o'];
            }
            if(isset($_POST['type_b'])) {
                $this->types['type_b'] = $_POST['type_b'];
            }
            if(isset($_POST['type_n'])) {
                $this->types['type_n'] = $_POST['type_n'];
            }
            if(isset($_POST['type_u'])) {
                $this->types['type_u'] = $_POST['type_u'];
            }
            return $this->types;
        }
    }