<?php

declare(strict_types=1);

namespace App\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Form\Type\ModelType;
use Sonata\AdminBundle\Form\Type\ModelListType;

use Sonata\AdminBundle\Form\Type\ModelAutocompleteType;

use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\CoreBundle\Form\Type\DatePickerType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\LocaleType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TimezoneType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormTypeInterface;

use App\Application\ToolsBundle\Form\Type\DependentFilteredEntityType;


final class ServicioGeneralAdmin extends AbstractAdmin
{

    protected $datagridValues = [
	'_page' => 1,
        '_sort_order' => 'DESC',
        '_sort_by' => 'id',
    ];

    
    /*protected function configureDefaultFilterValues(array &$filterValues)
    {
 	$now = new \DateTime('now');
    
	$filterValues['tipoestado'] = [
		'value' => '1',
	];
	
	$filterValues['anio'] = [
		'value' => $now->format('Y'),
	];
	
	$filterValues['mes'] = [
		'value' => $now->format('m'),
	];
    }*/
    
    /*public function getFilterParameters(){
	$now = new \DateTime('now');
	$this->datagridValues = array_merge(
		array(
			'tipoestado' => array('value' => '1'), 
			'anio' => array('value' => $now->format('Y')),
			'mes' => array('value' => $now->format('m'))
		), $this->datagridValues);
	return parent::getFilterParameters();
    }*/

    protected function configureDatagridFilters(DatagridMapper $datagridMapper): void
    {
        $datagridMapper
            ->add('nrocaso')
            //->add('clienteid')
            ->add('nombre')
            //->add('tipoid')
            //->add('tipo')
            //->add('denunciante')
            //->add('dominio')
            //->add('marca')
            //->add('color')
            //->add('falla')
            //->add('calle')
            //->add('numero')
            //->add('depto')
            //->add('casa')
            /*->add('lote')
            ->add('manzana')
            ->add('localidad')*/
            ->add('provincia')
           /*->add('destino')
            ->add('localidaddest')
            ->add('kilometros')
            ->add('telefono')
            ->add('id')
            ->add('piso')
            ->add('provinciadest')
            ->add('hsllamada')
            ->add('hsasignacion')
            ->add('hsarribo')*/
            ->add('hsfinalizacion')
            ->add('tipoestado', null, array('label' => 'Estado'/*, 'show_filter' => true*/))
	    ->add('anio', null, array('label' => 'Año'/*, 'show_filter' => true*/))
            ->add('mes', null, array('label' => 'Mes'/*, 'show_filter' => true*/))            
            /*->add('opini')
            ->add('opfin')
            ->add('movilid')
            ->add('choferid')
            ->add('movil')
            ->add('chofer')
            ->add('kmini')
            ->add('kmfin')
            ->add('codaut')
            ->add('empresaid')
            ->add('empresa')
            ->add('tipocli')
            ->add('tipodist')
            ->add('obs')
            ->add('abrloc1')
            ->add('abrloc2')
            ->add('movilnro')
            ->add('abrchof')
            ->add('servfin')
            ->add('impcob')
            ->add('kmreal')
            ->add('kmaju1')
            ->add('kmaju2')
            ->add('kmtot')
            ->add('perf')
            ->add('hsliq')
            ->add('modelo')
            ->add('hsalta')
            ->add('inactivo')
            ->add('ciermec')
            ->add('mecfecha')
            ->add('opcierre')
            ->add('cerrado')
            ->add('hsprogramacion')
            ->add('impbase')
            ->add('segundos')
            ->add('tablamodificada')
            ->add('usuario')
            ->add('revisar')
            ->add('porque')
            ->add('facturaid')
            ->add('ciermov')
            ->add('otros')*/
            ;
    }

    protected function configureListFields(ListMapper $listMapper): void
    {
        $listMapper
	    //->add('id', null, array('label'=>'Caso'))
            ->add('nrocaso', null, array('label'=>'Caso'))
            //->add('clienteid')
            ->add('nombre')
            //->add('tipoid', null, array('label'=>'Tipo Servicio'))
            //->add('tipo')
            //->add('denunciante')
            ->add('dominio')
            //->add('marca')
	    ->add('marcaid', null, array('label'=>'Marca'))
	    ->add('modeloid', null, array('label'=>'Modelo'))
            //->add('color')
	    //->add('colorid', null, array('label'=>'Color'))
            //->add('fallaid', null, array('label'=>'Falla'))
            //->add('calle')
            //->add('numero')
            //->add('depto')
            //->add('casa')
            //->add('lote')
            //->add('manzana')
            //->add('localidadid')
	    //->add('localidadid', null, array('label'=>'Provincia'))
            //->add('provincia', null, array('label'=>'Provincia'))
            ->add('destino')
            //->add('localidaddest')
            //->add('kilometros')
            //->add('telefono')
            //->add('piso')
            //->add('provinciadest')
            ->add('hsllamada', 'date', array('label'=>'Llamada', 'format' => 'd/m/Y h:m'))
            //->add('hsasignacion')
            //->add('hsarribo')
            //->add('hsfinalizacion')
            //->add('estado')
            //->add('mes')
            //->add('anio')
            //->add('opini')
            //->add('opfin')
            //->add('movilid', null, array('label'=>'Movil'))
            ->add('choferid', null, array('label'=>'Chofer'))
            //->add('movil')
            //->add('chofer')
            //->add('kmini')
            //->add('kmfin')
            //->add('codaut')
            ->add('empresaid', null, array('label'=>'Empresa'))
            //->add('empresa')
            //->add('tipocli')
            //->add('tipodist', null, array('label'=>'Distancia'))
            //->add('obs')
            //->add('abrloc1')
            //->add('abrloc2')
            //->add('movilnro')
            //->add('abrchof')
            //->add('servfin')
            //->add('impcob')
            //->add('kmreal')
            //->add('kmaju1')
            //->add('kmaju2')
            //->add('kmtot')
            //->add('perf')
            //->add('hsliq')
            //->add('modelo')
            //->add('hsalta')
            //->add('inactivo')
            //->add('ciermec')
            //->add('mecfecha')
            //->add('opcierre')
            //->add('cerrado')
            //->add('hsprogramacion')
            //->add('impbase')
            //->add('segundos')
            //->add('tablamodificada')
            //->add('usuario')
            //->add('revisar')
            //->add('porque')
            //->add('facturaid')
            //->add('ciermov')
            //->add('otros')
	    //->add('tipoestado', null, array('label'=>'Estado'))
            ->add('_action', null, [
                'actions' => [
                    //'show' => ['template' => '/ServicioAdmin/list__action_show.html.twig',],
                    'edit' => ['template' => '/ServicioAdmin/list__action_edit.html.twig',],
                    'delete' => ['template' => '/ServicioAdmin/list__action_delete.html.twig',],
                ],
            ]);
    }

    protected function configureFormFields(FormMapper $formMapper): void
    {
    
	$now = new \DateTime();
    
        $formMapper
		
		->add('tipocli', null, array('label'=>'Tipo Cliente'))
		->add('empresaid', null, array('label'=>'Empresa'))            
		->add('hsllamada', DatePickerType::class, array('format' => 'yyyy-MM-dd hh:mm', 'label'=>'Llamada', 'required' => false))
		->add('codaut', null, array('label'=>'Autorización'))
		->add('denunciante', null, array('label'=>'Denunciante'))

		->add('clienteid', ModelListType::class, array('label'=>'Asegurado', 'btn_add'=>false, 'btn_delete'=>false, 'required'=>false))
		->add('nombre')
		->add('dominio')
		->add('telefono')
		->add('marcaid', null, array('label'=>'Marca'));
		
		$container = $this->getConfigurationPool()->getContainer();
		$dependant_entities = $container->getParameter('application_tools.dependent_filtered_entities');

		$subscriber = $container->get('application_tools.dependent_filtered_entity_subscriber');

		$form_options = $dependant_entities['modelo_by_marca']['form_options'];
		$form_options = array_merge($form_options, array('required'=>false));

		$formMapper->add('modeloid', DependentFilteredEntityType::class, $form_options);
		$subscriber->addField('modeloid', $form_options);

		$formMapper->getFormBuilder()->addEventSubscriber($subscriber);
		
		$formMapper
		//->add('modeloid', null, array('label'=>'Modelo'))
		->add('colorid', null, array('label'=>'Color'))

		->add('provinciaid');		
		
		//->add('localidadid')		
		$container = $this->getConfigurationPool()->getContainer();
		$dependant_entities = $container->getParameter('application_tools.dependent_filtered_entities');

		$subscriber = $container->get('application_tools.dependent_filtered_entity_subscriber');

		$form_options = $dependant_entities['localidad_by_provincia']['form_options'];
		$form_options = array_merge($form_options, array('required'=>false));

		$formMapper->add('localidadid', DependentFilteredEntityType::class, $form_options);
		$subscriber->addField('localidadid', $form_options);

		$formMapper->getFormBuilder()->addEventSubscriber($subscriber);
		
		$formMapper
		->add('calle')
		->add('numero')
		->add('depto')
		->add('lote')
		->add('manzana')
		->add('casa')
		->add('fallaid', ModelAutoCompleteType::class, [
			'property' => 'falla',
			'btn_add' => 'Agregar Falla'
		])
		->add('destino')
	
		->add('provinciadestid');
		
		//->add('localidaddestid')

		$container = $this->getConfigurationPool()->getContainer();
		$dependant_entities = $container->getParameter('application_tools.dependent_filtered_entities');

		$subscriber = $container->get('application_tools.dependent_filtered_entity_subscriber');

		$form_options = $dependant_entities['localidaddest_by_provinciadest']['form_options'];
		$form_options = array_merge($form_options, array('required'=>false));

		$formMapper->add('localidaddestid', DependentFilteredEntityType::class, $form_options);
		$subscriber->addField('localidaddestid', $form_options);

		$formMapper->getFormBuilder()->addEventSubscriber($subscriber);
		
		$formMapper
		->add('destino')

		->add('kmini')
		->add('kmfin')

		->add('hsasignacion', DatePickerType::class, array('format' => 'yyyy-MM-dd hh:mm', 'label'=>'Asignación', 'required' => false))
		->add('hsarribo', DatePickerType::class, array('format' => 'yyyy-MM-dd hh:mm', 'label'=>'Arribo', 'required' => false))
		->add('hsfinalizacion', DatePickerType::class, array('format' => 'yyyy-MM-dd hh:mm', 'label'=>'Finalización', 'required' => false))


		->add('movilid')
		->add('choferid', null, array('label'=>'Mecánico'))
		->add('tipoid', null, array('label'=>'Tipo Servicio'))
		
		->add('tipodist', null, array('label'=>'Distancia'))
		
	    ->add('tipoestado', null, array('label'=>'Estado'))
	    
	    
	    ->add('impbase')
	    ->add('impcob')
	    
	    ->add('obs');
		
		
		
		
    }

    protected function configureShowFields(ShowMapper $showMapper): void
    {
        $showMapper
            ->add('nrocaso')
            ->add('clienteid')
            ->add('nombre')
            ->add('tipoid')
            ->add('tipo')
            ->add('denunciante')
            ->add('dominio')
            ->add('marca')
            ->add('color')
            ->add('falla')
            ->add('calle')
            ->add('numero')
            ->add('depto')
            ->add('casa')
            ->add('lote')
            ->add('manzana')
            ->add('localidad')
            ->add('provincia')
            ->add('destino')
            ->add('localidaddest')
            ->add('kilometros')
            ->add('telefono')
            ->add('id')
            ->add('piso')
            ->add('provinciadest')
            ->add('hsllamada')
            ->add('hsasignacion')
            ->add('hsarribo')
            ->add('hsfinalizacion')
            ->add('estado')
            ->add('mes')
            ->add('anio')
            ->add('opini')
            ->add('opfin')
            ->add('movilid')
            ->add('choferid')
            ->add('movil')
            ->add('chofer')
            ->add('kmini')
            ->add('kmfin')
            ->add('codaut')
            ->add('empresaid')
            ->add('empresa')
            ->add('tipocli')
            ->add('tipodist')
            ->add('obs')
            ->add('abrloc1')
            ->add('abrloc2')
            ->add('movilnro')
            ->add('abrchof')
            ->add('servfin')
            ->add('impcob')
            ->add('kmreal')
            ->add('kmaju1')
            ->add('kmaju2')
            ->add('kmtot')
            ->add('perf')
            ->add('hsliq')
            ->add('modelo')
            ->add('hsalta')
            ->add('inactivo')
            ->add('ciermec')
            ->add('mecfecha')
            ->add('opcierre')
            ->add('cerrado')
            ->add('hsprogramacion')
            ->add('impbase')
            ->add('segundos')
            ->add('tablamodificada')
            ->add('usuario')
            ->add('revisar')
            ->add('porque')
            ->add('facturaid')
            ->add('ciermov')
            ->add('otros')
            ;
    }
}