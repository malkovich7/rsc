<?php
namespace app\libutils;

use app\models\RscCategoriaproducto;

class CargaCatalogos{

	public static function getCategoriaProducto(){
		$categoriaCatalogo =  RscCategoriaproducto::find()->orderBy('id')->all();
		$categoriaArray = [];
		foreach($categoriaCatalogo as $categoria )
		{
		 $categoriaArray[$categoria->id] = $categoria->categoria;
		}
		return $categoriaArray;
	}
	

}
