<?php

use Illuminate\Database\Seeder;

class linesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lines = array(        	
			array('number'=>'1001'),
			array('number'=>'1002'),
			array('number'=>'1003'),
			array('number'=>'1004'),
			array('number'=>'1005'),
			array('number'=>'1006'),
			array('number'=>'1007'),
			array('number'=>'1008'),
			array('number'=>'1009'),
			array('number'=>'1010'),
			array('number'=>'1011'),
			array('number'=>'1012'),
			array('number'=>'1013'),
			array('number'=>'1014'),
			array('number'=>'1015'),
			array('number'=>'1016'),
			array('number'=>'1017'),
			array('number'=>'1018'),
			array('number'=>'1019'),
			array('number'=>'1020'),
			array('number'=>'1021'),
			array('number'=>'1022'),
			array('number'=>'1023'),
			array('number'=>'1024'),
			array('number'=>'1025'),
			array('number'=>'1026'),
			array('number'=>'1027'),
			array('number'=>'1028'),
			array('number'=>'1029'),
			array('number'=>'1030'),
			array('number'=>'1031'),
			array('number'=>'1032'),
			array('number'=>'1033'),
			array('number'=>'1034'),
			array('number'=>'1035'),
			array('number'=>'1036'),
			array('number'=>'1037'),
			array('number'=>'1038'),
			array('number'=>'1039'),
			array('number'=>'1040'),
			array('number'=>'1041'),
			array('number'=>'1042'),
			array('number'=>'1043'),
			array('number'=>'1044'),
			array('number'=>'1045'),
			array('number'=>'1046'),
			array('number'=>'1047'),
			array('number'=>'1048'),
			array('number'=>'1049'),
			array('number'=>'1050'),
			array('number'=>'1051'),
			array('number'=>'1052'),
			array('number'=>'1053'),
			array('number'=>'1054'),
			array('number'=>'1055'),
			array('number'=>'1056'),
			array('number'=>'1057'),
			array('number'=>'1058'),
			array('number'=>'1059'),
			array('number'=>'1060'),
			array('number'=>'1061'),
			array('number'=>'1062'),
			array('number'=>'1063'),
			array('number'=>'1064'),
			array('number'=>'1065'),
			array('number'=>'1066'),
			array('number'=>'1067'),
			array('number'=>'1068'),
			array('number'=>'1069'),
			array('number'=>'1070'),
			array('number'=>'1071'),
			array('number'=>'1072'),
			array('number'=>'1073'),
			array('number'=>'1074'),
			array('number'=>'1075'),
			array('number'=>'1076'),
			array('number'=>'1077'),
			array('number'=>'1078'),
			array('number'=>'1079'),
			array('number'=>'1080'),
			array('number'=>'1081'),
			array('number'=>'1082'),
			array('number'=>'1083'),
			array('number'=>'1084'),
			array('number'=>'1085'),
			array('number'=>'1086'),
			array('number'=>'1087'),
			array('number'=>'1088'),
			array('number'=>'1089'),
			array('number'=>'1090'),
			array('number'=>'1091'),
			array('number'=>'1092'),
			array('number'=>'1093'),
			array('number'=>'1094'),
			array('number'=>'1095'),
			array('number'=>'1096'),
			array('number'=>'1097'),
			array('number'=>'1098'),
			array('number'=>'1099'),
			array('number'=>'1100'),
			array('number'=>'1101'),
			array('number'=>'1102'),
			array('number'=>'1103'),
			array('number'=>'1104'),
			array('number'=>'1105'),
			array('number'=>'1106'),
			array('number'=>'1107'),
			array('number'=>'1108'),
			array('number'=>'1109'),
			array('number'=>'1110'),
			array('number'=>'1111'),
			array('number'=>'1112'),
			array('number'=>'1113'),
			array('number'=>'1114'),
			array('number'=>'1115'),
			array('number'=>'1116'),
			array('number'=>'1117'),
			array('number'=>'1118'),
			array('number'=>'1119'),
			array('number'=>'1120'),
			array('number'=>'1121'),
			array('number'=>'1122'),
			array('number'=>'1123'),
			array('number'=>'1124'),
			array('number'=>'1125'),
			array('number'=>'1126'),
			array('number'=>'1127'),
			array('number'=>'1128'),
			array('number'=>'1129'),
			array('number'=>'1130'),
			array('number'=>'1131'),
			array('number'=>'1132'),
			array('number'=>'1133'),
			array('number'=>'1134'),
			array('number'=>'1135'),
			array('number'=>'1136'),
			array('number'=>'1137'),
			array('number'=>'1138'),
			array('number'=>'1139'),
			array('number'=>'1140'),
			array('number'=>'1141'),
			array('number'=>'1142'),
			array('number'=>'1143'),
			array('number'=>'1144'),
			array('number'=>'1145'),
			array('number'=>'1146'),
			array('number'=>'1147'),
			array('number'=>'1148'),
			array('number'=>'1149'),
			array('number'=>'1150'),
			array('number'=>'1151'),
			array('number'=>'1152'),
			array('number'=>'1153'),
			array('number'=>'1154'),
			array('number'=>'1155'),
			array('number'=>'1156'),
			array('number'=>'1157'),
			array('number'=>'1158'),
			array('number'=>'1159'),
			array('number'=>'1160'),
  	
        	);

		
		foreach ($lines as $key) {
			DB::table('lines')->insert([
	            [
	                'number' => $key['number'],
	                'created_at' => date("Y-m-d H:i:s"),
	                'updated_at' => date("Y-m-d H:i:s")
	            ],
			]);

		}

        
    }
}
