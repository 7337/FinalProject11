<?php
switch ($sw) {
	
	case 'dtadmn':
		require_once 'dataadmin.php';
		break;
	case 'dtprdk':
		require_once 'dataproduk.php';
		break;
	case 'tmbhadmn':
		require_once 'tambahadmin.php';
		break;
	case 'tmbhprdk':
		require_once 'tambahproduk.php';
		break;
	case 'updtadmn':
		require_once 'updateadmin.php';
		break;
	case 'updtprdk':
		require_once 'updateproduk.php';
		break;
	case 'dltadmn':
		require_once 'deleteadmin.php';
		break;
case 'dltprdk':
		require_once 'deleteproduk.php';
		break;		
	case 'logout':
		require_once 'destroysession.php';
		break;
	
	default:
		require_once 'welcome.php';
		break;
}
?>