<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Crud_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }
/* Metodos para los usuarios, es posible que no los use ya que voy a usar otro metodo de atutenticacion.*/
/* Metodos para las categorias.*/
    function categories_show()
    {
        $query = $this->db->query('SELECT id_categoria, nombre_categoria, 
        CASE
        WHEN es_activa = 0 THEN "INACTIVA"
        WHEN es_activa = 1 THEN "ACTIVA"
        ELSE "NO TIENE ESTADO"
        END AS es_activa FROM categorias');
        return $query->result();
    }
    function categorias_unico_registro($id_categoria) {
        $query = $this->db->query('SELECT * FROM categorias WHERE `id_categoria` =' .$id_categoria);
        return $query->row();
    }
    function categories_add()
    {
        $data = array (
            'nombre_categoria' => $this->input->post('nombre_categoria'),
            'es_activa' => $this->input->post('es_activa')
        );
        $this->db->insert('categorias',$data);
    }
    function categories_update($id_categoria)
    {
        $data = array (
            'nombre_categoria' => $this->input->post('nombre_categoria'),
            'es_activa' => $this->input->post('es_activa')
        );
        $this->db->where('id_categoria', $id_categoria);
        $this->db->update('categorias', $data);
    }
    function categories_delete($id_categoria)
    {
        $this->db->where('id_categoria', $id_categoria);
        $this->db->delete('categorias');
    }
/*Metodos para las subcategorias*/
    function sub_categories_show()
    {
        $query = $this->db->query('SELECT id_subcategoria, nombre_subcategoria, 
        CASE
        WHEN es_activa = 0 THEN "INACTIVA"
        WHEN es_activa = 1 THEN "ACTIVA"
        ELSE "NO TIENE ESTADO"
        END AS es_activa FROM subcategoria');
        return $query->result();
    }
    function sub_categories_unico_registro($id_sub_categoria) {
        $query = $this->db->query('SELECT * FROM subcategoria WHERE `id_subcategoria` =' .$id_sub_categoria);
        return $query->row();
    }
    function sub_categories_add()
    {
        $data = array (
            'nombre_subcategoria' => $this->input->post('nombre_subcategoria'),
            'es_activa' => $this->input->post('es_activa')
        );
        $this->db->insert('subcategoria',$data);
    }
    function sub_categories_update($id_subcategoria)
    {
        $data = array (
            'nombre_subcategoria' => $this->input->post('nombre_subcategoria'),
            'es_activa' => $this->input->post('es_activa')
        );
        $this->db->where('id_subcategoria', $id_subcategoria);
        $this->db->update('subcategoria',$data);
    }
    function sub_categories_delete($id_subcategoria)
    {
        $this->db->where('id_subcategoria', $id_subcategoria);
        $this->db->delete('subcategoria');
    }
    /* Metodos para los productos.*/
    function products_show()
    {
        $query = $this->db->query('SELECT id_producto, nombre_producto, valor_producto, descripcion_producto, 
        CASE
        WHEN es_activo = 0 THEN "INACTIVO"
        WHEN es_activo = 1 THEN "ACTIVO"
        ELSE "NO TIENE ESTADO"
        END AS es_activo FROM productos');
        return $query->result();
    }
    function products_unico_registro($id_producto) {
        $query = $this->db->query('SELECT * FROM productos WHERE `id_producto` =' .$id_producto);
        return $query->row();
    }
    function products_add()
    {
        $data = array (
            'nombre_producto' => $this->input->post('nombre_producto'),
            'valor_producto' => $this->input->post('valor_producto'),            
            'descripcion_producto' => $this->input->post('descripcion_producto'),
            'es_activo' => $this->input->post('es_activo')
        );
        $this->db->insert('productos',$data);
    }
    function products_update($id_producto)
    {
        $data = array (
            'nombre_producto' => $this->input->post('nombre_producto'),
            'descripcion_producto' => $this->input->post('descripcion_producto'),
            'valor_producto' => $this->input->post('valor_producto'),
            'es_activo' => $this->input->post('es_activo')
        );
        $this->db->where('id_producto', $id_producto);
        $this->db->update('productos',$data);
    }
    
    function products_delete($id_producto)
    {
        $this->db->where('id_producto', $id_producto);
        $this->db->delete('productos');
    }
/** Metodo para las categorias unidas a las subcategorias.*/
    function category_sub_category_show()
    {
        $query = $this->db->query('SELECT
        catsub.id_catsub as id_catsub,
        cat.nombre_categoria as id_categoria,
        sub.nombre_subcategoria as id_sub_categoria,
        catsub.descripcion as descripcion,
        CASE
        WHEN catsub.es_activa = 0 THEN "INACTIVA"
        WHEN catsub.es_activa = 1 THEN "ACTIVA"
        ELSE "NO TIENE ESTADO"
        END AS es_activa
        FROM
        categoria_subcategoria AS catsub
        INNER JOIN categorias cat ON cat.id_categoria = catsub.id_categoria
        INNER JOIN subcategoria sub ON sub.id_subcategoria = catsub.id_sub_categoria
        WHERE catsub.es_activa = 1');
        return $query->result();
    }
    function category_sub_category_unico_registro($id_catsub) {
        $query = $this->db->query('SELECT * FROM categoria_subcategoria WHERE `id_catsub` =' .$id_catsub);
        return $query->row();
    }
    function category_sub_category_add()
    {
        $data = array (
            'id_categoria' => $this->input->post('id_categoria'),
            'id_sub_categoria' => $this->input->post('id_sub_categoria'),
            'descripcion' => $this->input->post('descripcion'),
            'es_activa' => $this->input->post('es_activa'),
        );
        $this->db->insert('categoria_subcategoria',$data);
    }
    function category_sub_category_update($id_catsub)
    {
        $data = array (
            'id_categoria' => $this->input->post('id_categoria'),
            'id_sub_categoria' => $this->input->post('id_sub_categoria'),
            'descripcion' => $this->input->post('descripcion'),
            'es_activa' => $this->input->post('es_activa'),
        );
        $this->db->where('id_catsub', $id_catsub);
        $this->db->update('categoria_subcategoria',$data);
    }
    function category_sub_category_delete($id_catsub)
    {
        $this->db->where('id_catsub', $id_catsub);
        $this->db->delete('categoria_subcategoria');
    }
    function get_category_dropdown()
    {
         $query = $this->db->query('SELECT id_categoria, nombre_categoria FROM categorias WHERE es_activa = 1');
        // si hay resultados
       if ($query->num_rows() > 0) {
        // almacenamos en una matriz bidimensional
        foreach($query->result() as $row)
           $arrDatos[htmlspecialchars($row->id_categoria, ENT_QUOTES)] = htmlspecialchars($row->nombre_categoria, ENT_QUOTES);
        $query->free_result();
        return $arrDatos;
        }
    }
    function get_subcategory_dropdown()
    {
         $query = $this->db->query('SELECT id_subcategoria, nombre_subcategoria FROM subcategoria  WHERE es_activa = 1');
        // si hay resultados
       if ($query->num_rows() > 0) {
        // almacenamos en una matriz bidimensional
        foreach($query->result() as $row)
           $arrDatos[htmlspecialchars($row->id_subcategoria, ENT_QUOTES)] = htmlspecialchars($row->nombre_subcategoria, ENT_QUOTES);
        $query->free_result();
        return $arrDatos;
        }
    }



    /* Metodos para los productos por categoria.*/
     function products_category_show()
    {
        $query = $this->db->query('SELECT 
        prodcat.id_prodcat AS id_prodcat, 
        cat.nombre_categoria AS id_categoria, 
        subcat.nombre_subcategoria AS id_subcategoria, 
        prod.nombre_producto AS id_product, 
        prod.valor_producto AS valor_producto,
        CASE
        WHEN prod.es_activo = 0 THEN "INACTIVA"
        WHEN prod.es_activo = 1 THEN "ACTIVA"
        ELSE "NO TIENE ESTADO"
        END AS es_activo 
        FROM 
        shop.product_cat as prodcat
        JOIN shop.productos prod ON prod.id_producto = prodcat.id_product
        JOIN shop.categorias cat ON cat.id_categoria = prodcat.id_categoria
        JOIN shop.subcategoria subcat ON subcat.id_subcategoria = prodcat.id_subcategoria
        WHERE prodcat.es_activo = 1');
        return $query->result();
    }
    function products_category_unico_registro($id_prodcat) {
        $query = $this->db->query('SELECT * FROM product_cat WHERE `id_prodcat` =' .$id_prodcat);
        return $query->row();
    }
    function products_category_add()
    {
        $data = array (
            'id_categoria' => $this->input->post('id_categoria'),
            'id_subcategoria' => $this->input->post('id_subcategoria'),
            'id_product' => $this->input->post('id_product'),
            'es_activo' => $this->input->post('es_activo'),
        );
        $this->db->insert('product_cat', $data);
    }
    function products_category_update($id_prodcat)
    {
        $data = array (
            'id_categoria' => $this->input->post('id_categoria'),
            'id_subcategoria' => $this->input->post('id_subcategoria'),
            'id_product' => $this->input->post('id_product'),
            'es_activo' => $this->input->post('es_activo'),
        );
        $this->db->where('id_prodcat', $id_prodcat);
        $this->db->update('product_cat', $data);
    }
    function products_category_delete($id_prodcat)
    {
        $this->db->where('id_prodcat', $id_prodcat);
        $this->db->delete('product_cat');
    }

    
     /* Metodos para los totales por productos.*/
    function total_products_show()
    {
        $query = $this->db->query('SELECT id_totales, nombre_producto AS "id_producto", cantidad_producto FROM totales_actuales, productos where totales_actuales.id_producto = productos.id_producto ');
        return $query->result();
    }
    function total_products_unico_registro($id_totales) {
        $query = $this->db->query('SELECT 
        DISTINCT
        id_totales, 
        (SELECT nombre_producto FROM productos WHERE id_producto = (SELECT id_producto FROM totales_actuales WHERE `id_totales` = '.$id_totales.' ))AS  "id_producto", 
        cantidad_producto  FROM totales_actuales, productos  WHERE `id_totales` ='.$id_totales
    );
        return $query->row();
    }
    function total_products_add()
    {
        $data = array(
            'id_producto' => $this->input->post('id_producto'),
            'cantidad_producto' => $this->input->post('cantidad_producto')
        );
        $this->db->insert('totales_actuales', $data);
    }
    function total_products_update($id_totales)
    {
        $data = array (
            //'id_totales' => $this->input->post('id_totales'),
            'cantidad_producto' => $this->input->post('cantidad_producto'),
        );
        $this->db->where('id_totales', $id_totales);
        $this->db->update('totales_actuales', $data);
    }
    function total_products_delete($id_totales)
    {
        $this->db->where('id_totales', $id_totales);
        $this->db->delete('totales_actuales');
    }
    function get_productos_dropdown()
    {
         $query = $this->db->query('SELECT id_producto, nombre_producto FROM productos WHERE es_activo = 1');
        // si hay resultados
       if ($query->num_rows() > 0) {
        // almacenamos en una matriz bidimensional
        foreach($query->result() as $row)
           $arrDatos[htmlspecialchars($row->id_producto, ENT_QUOTES)] = htmlspecialchars($row->nombre_producto, ENT_QUOTES);
        $query->free_result();
        return $arrDatos;
        }
    }
   
/*
 * Fin de los metodos para el crud
 */










    function createData()
    {
        $data = array (
            'nombre_categoria' => $this->input->post('nombre_categoria'),
            'es_activa' => $this->input->post('es_activa')
        );
        $this->db->insert('categorias',$data);
    }

    function getAllData()
    {
        $query = $this->db->query('SELECT * FROM categorias');
        return $query->result();
    }
    function getData($id_categoria) {
        $query = $this->db->query('SELECT * FROM categorias WHERE `id_categoria` =' .$id_categoria);
        return $query->row();
    }

    function updateData($id_categoria) {
        $data = array (
            'nombre_categoria' => $this->input->post('nombre_categoria'),
            'es_activa' => $this->input->post('es_activa')
        );
        $this->db->where('id_categoria', $id_categoria);
        $this->db->update('categorias', $data);
    }
    function deleteData($id_categoria) {
        $this->db->where('id_categoria', $id_categoria);
        $this->db->delete('categorias');
    }

}
