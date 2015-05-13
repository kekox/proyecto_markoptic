<?php
 
class MercadoTableSeeder extends Seeder {
 
  public function run()
  {
	  //delete users table records
        DB::table('mercados')->delete();
        
        $proyectoMercadoOne = Mercado::create(array(
            'folio_proyecto'            => '1',
            'mercado'                   =>'Lorem ipsum dolor sit amet.',
            'modelo_de_negocio'         =>'Lorem ipsum dolor.',
            'precio'                    =>'5000.00',
            'proyecciones'              =>'Lorem ipsum dolor sit.',
            'enfoque_de_insercion'      =>'Lorem ipsum dolor sit.',
            'cliente_objetivo'          =>'Lorem ipsum dolor sit.',
            'beneficios'                =>'Lorem ipsum dolor sit.',
            'competencia'               =>'Lorem ipsum dolor sit.',    
            'patentes_similares'        =>'Lorem ipsum dolor sit.',
            'barreras'                  =>'Lorem ipsum dolor sit.',  
        ));

  }
 
}