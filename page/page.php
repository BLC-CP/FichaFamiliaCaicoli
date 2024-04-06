<?php 

$pagina = "";
if(isset($_GET['pagina'])){
	$pagina = $_GET['pagina'];

}

switch ($pagina) {
	case 'dashboard':
	$titulu = "DASHBOARD";
	$pagina = "include 'template/content.php';";
	break;

	case 'aldeia':
	$titulu = "DADUS ALDEIA";
	$pagina = "include 'database/input/aldeia/index.php';";
	break;
	case 'aumentaAldeia':
	$titulu = "PAGINA AUMENTA DADUS ALDEIA";
	$pagina = "include 'database/input/aldeia/aumenta.php';";
	break;
	case 'hamosAldeia':
	$titulu = "";
	$pagina = "include 'database/input/aldeia/hamos.php';";
	break;
	case 'hadiaAldeia':
	$titulu = "PAGINA HADIA DADUS ALDEIA";
	$pagina = "include 'database/input/aldeia/hadia.php';";
	break;

	case 'profisaun':
	$titulu = "DADUS PROFISAUN";
	$pagina = "include 'database/input/profisaun/index.php';";
	break;
	case 'aumentaProfisaun':
	$titulu = "PAGINA AUMENTA DADUS PROFISAUN";
	$pagina = "include 'database/input/profisaun/aumenta.php';";
	break;
	case 'hamosProfisaun':
	$titulu = "";
	$pagina = "include 'database/input/profisaun/hamos.php';";
	break;
	case 'hadiaProfisaun':
	$titulu = "PAGINA HADIA DADUS PROFISAUN";
	$pagina = "include 'database/input/profisaun/hadia.php';";
	break;

	case 'literaria':
	$titulu = "DADUS LITERARIA";
	$pagina = "include 'database/input/literaria/index.php';";
	break;
	case 'aumentaLiteraria':
	$titulu = "PAGINA AUMENTA DADUS LITERARIA";
	$pagina = "include 'database/input/literaria/aumenta.php';";
	break;
	case 'hamosLiteraria':
	$titulu = "";
	$pagina = "include 'database/input/literaria/hamos.php';";
	break;
	case 'hadiaLiteraria':
	$titulu = "PAGINA HADIA DADUS LITERARIA";
	$pagina = "include 'database/input/literaria/hadia.php';";
	break;

	case 'religiaun':
	$titulu = "DADUS RELIGIAUN";
	$pagina = "include 'database/input/religiaun/index.php';";
	break;
	case 'aumentaReligiaun':
	$titulu = "PAGINA HADIA DADUS RELIGIAUN";
	$pagina = "include 'database/input/religiaun/aumenta.php';";
	break;
	case 'hamosReligiaun':
	$titulu = "";
	$pagina = "include 'database/input/religiaun/hamos.php';";
	break;
	case 'hadiaReligiaun':
	$titulu = "PAGINA HADIA DADUS RELIGIAUN";
	$pagina = "include 'database/input/religiaun/hadia.php';";
	break;

	case 'estadu_sivil':
	$titulu = "DADUS ESTADU CIVIL";
	$pagina = "include 'database/input/estadu_sivil/index.php';";
	break;
	case 'aumentaEstadu_civil':
	$titulu = "PAGINA HADIA DADUS ESTADU CIVIL";
	$pagina = "include 'database/input/estadu_sivil/aumenta.php';";
	break;
	case 'hamosEstadu_civil':
	$titulu = "DADUS ESTADU CIVIL";
	$pagina = "include 'database/input/estadu_sivil/hamos.php';";
	break;
	case 'hadiaEstadu_civil':
	$titulu = "PAGINA HADIA DADUS ESTADU CIVIL";
	$pagina = "include 'database/input/estadu_sivil/hadia.php';";
	break;

	case 'relfam':
	$titulu = "DADUS RELASAUN FAMILIA";
	$pagina = "include 'database/input/relfam/index.php';";
	break;
	case 'aumentaRelfam':
	$titulu = "PAGINA HADIA DADUS RELASAUN FAMILIA";
	$pagina = "include 'database/input/relfam/aumenta.php';";
	break;
	case 'hamosRelfam':
	$titulu = "DADUS RELASAUN FAMILIA";
	$pagina = "include 'database/input/relfam/hamos.php';";
	break;
	case 'hadiaRelfam':
	$titulu = "PAGINA HADIA DADUS RELASAUN FAMILIA";
	$pagina = "include 'database/input/relfam/hadia.php';";
	break;

	case 'admin':
	$titulu = "DADUS ADMIN";
	$pagina = "include 'database/input/admin/index.php';";
	break;
	case 'aumentaAdmin':
	$titulu = "DADUS ADMIN";
	$pagina = "include 'database/input/admin/aumenta.php';";
	break;
	case 'hamosAdmin':
	$titulu = "DADUS ADMIN";
	$pagina = "include 'database/input/admin/hamos.php';";
	break;
	case 'hadiaAdmin':
	$titulu = "DADUS ADMIN";
	$pagina = "include 'database/input/admin/hadia.php';";
	break;

	case 'populasaun':
	$titulu = "DADUS POPULASAUN";
	$pagina = "include 'database/proses/populasaun/index.php';";
	break;
	case 'aumentaPopulasaun':
	$titulu = "DADUS POPULASAUN";
	$pagina = "include 'database/proses/populasaun/aumenta.php';";
	break;
	case 'hamosPopulasaun':
	$titulu = "DADUS POPULASAUN";
	$pagina = "include 'database/proses/populasaun/hamos.php';";
	break;
	case 'hadiaPopulasaun':
	$titulu = "DADUS POPULASAUN";
	$pagina = "include 'database/proses/populasaun/hadia.php';";
	break;

	case 'umkn':
	$titulu = "DADUS UMA KAIN";
	$pagina = "include 'database/proses/umkn/index.php';";
	break;
	case 'aumentaUmkn':
	$titulu = "DADUS UMA KAIN";
	$pagina = "include 'database/proses/umkn/aumenta.php';";
	break;
	case 'hamosUmkn':
	$titulu = "DADUS UMA KAIN";
	$pagina = "include 'database/proses/umkn/hamos.php';";
	break;
	case 'hadiaUmkn':
	$titulu = "DADUS UMA KAIN";
	$pagina = "include 'database/proses/umkn/hadia.php';";
	break;

	case 'aumeUmkn':
	$titulu = "DADUS UMA KAIN";
	$pagina = "include 'database/proses/umkn/aumentadet.php';";
	break;

	case 'detail':
	$titulu = "";
	$pagina = "include 'database/proses/detail/index.php';";
	break;
	case 'hamosdtlumkn':
	$titulu = "";
	$pagina = "include 'database/proses/detail/hamos.php';";
	break;
	case 'hadiadtlumkn':
	$titulu = "";
	$pagina = "include 'database/proses/detail/hadia.php';";
	break;

	case 'relatoriu':
	$titulu = "";
	$pagina = "include 'database/output/relatorio.php';";
	break;

	case 'relumkn':
	$titulu = "";
	$pagina = "include 'database/output/relatoriu.php';";
	break;

	case 'logout':
	$titulu = "";
	$pagina = "include 'logs/logout.php';";
	break;

	default:
	$titulu = "DASHBOARD";
	$pagina = "include 'template/content.php';";
	break;
}

$CONTENT['main'] = $pagina;

?>