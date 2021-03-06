<?php

namespace ReclamationBundle\Controller;

use CMEN\GoogleChartsBundle\GoogleCharts\Charts\BarChart;
use ReclamationBundle\Entity\Reclamation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use CMEN\GoogleChartsBundle\GoogleCharts\Charts\PieChart;

class StatController extends Controller
{

    public function adminAction()
    {
        $chart = new PieChart();
        $chartTreated = new PieChart();
        $em = $this->getDoctrine()->getManager();
        $bug = $em->getRepository(Reclamation::class)->countBug();
        $service = $em->getRepository(Reclamation::class)->countService();
        $other= $em->getRepository(Reclamation::class)->countOther();

        $treated = $em->getRepository(Reclamation::class)->countTreated();
        $notTreated = $em->getRepository(Reclamation::class)->countNotTreated();

        $nbBug = (int)$bug[0]['nm'];
        $nbser = (int)$service[0]['nm'];
        $nbother = (int)$other[0]['nm'];

        $nbTreated = (int)$treated[0]['nm'];
        $nbNotTreated = (int)$notTreated[0]['nm'];

        $chart->getData()->setArrayToDataTable(
            [['Claims','Number'],
                ['Bug',$nbBug] ,
                ['Services',$nbser] ,
                ['Other',$nbother]
            ]);

        $chartTreated->getData()->setArrayToDataTable(
            [['Claims','Number'],
                ['Treated',$nbTreated] ,
                ['Not treated',$nbNotTreated] ,
            ]);

        $chart->getOptions()->setTitle('Claims Stat');
        $chart->getOptions()->setHeight(400);
        $chart->getOptions()->setWidth(500);
        $chart->getOptions()->getTitleTextStyle()->setBold(true);
        $chart->getOptions()->getTitleTextStyle()->setColor('#009900');
        $chart->getOptions()->getTitleTextStyle()->setItalic(true);
        $chart->getOptions()->getTitleTextStyle()->setFontName('Arial');
        $chart->getOptions()->getTitleTextStyle()->setFontSize(20);


        $chartTreated->getOptions()->setTitle('Claims Treat');
        $chartTreated->getOptions()->setHeight(400);
        $chartTreated->getOptions()->setWidth(500);
        $chartTreated->getOptions()->getTitleTextStyle()->setBold(true);
        $chartTreated->getOptions()->getTitleTextStyle()->setColor('#009900');
        $chartTreated->getOptions()->getTitleTextStyle()->setItalic(true);
        $chartTreated->getOptions()->getTitleTextStyle()->setFontName('Arial');
        $chartTreated->getOptions()->getTitleTextStyle()->setFontSize(20);

        return $this->render('@Reclamation/Default/base1.html.twig', array(
          //  'count' => $count,
           // 'claims' => $countClaims,
            'piechart' => $chart,
            'piechartTreated' => $chartTreated
        ));
    }
}
