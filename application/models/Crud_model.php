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
        $query = $this->db->query('SELECT id_subcategoria, nombre_subcategoria, es_activa FROM subcategoria');
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
        $this->db->update('subcategoria',$id_subcategoria);
    }
    function sub_categories_delete($id_subcategoria)
    {
        $this->db->where('id_subcategoria', $id_subcategoria);
        $this->db->delete('subcategorias');
    }
    /* Metodos para los productos.*/
    function products_show()
    {
        $query = $this->db->query('SELECT id_producto, nombre_producto, descripcion_producto, es_activo FROM productos');
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
        $query = $this->db->query('SELECT id_catsub, id_categoria, id_sub_categoria, descripcion, es_activa FROM categoria_subcategoria');
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
    function category_sub_category_update($id_cat_sub)
    {
        $data = array (
            'id_categoria' => $this->input->post('id_categoria'),
            'id_sub_categoria' => $this->input->post('id_sub_categoria'),
            'descripcion' => $this->input->post('descripcion'),
            'es_activa' => $this->input->post('es_activa'),
        );
        $this->db->where('id_cat_sub', $id_catsub);
        $this->db->update('categoria_subcategoria',$data);
    }
    function category_sub_category_delete($id_cat_sub)
    {
        $this->db->where('id_cat_sub', $id_cat_sub);
        $this->db->delete('categoria_subcategoria');
    }
    /* Metodos para los productos por categoria.*/
     function products_category_show()
    {
        $query = $this->db->query('SELECT id_prodcat, id_catsub, id_product, es_activo FROM product_cat');
        return $query->result();
    }
    function products_category_unico_registro($id_prod_cat) {
        $query = $this->db->query('SELECT * FROM product_cat WHERE `id_prod_cat` =' .$id_prod_cat);
        return $query->row();
    }
    function products_category_add()
    {
        $data = array (
            'id_catsub' => $this->input->post('id_catsub'),
            'id_product' => $this->input->post('id_product'),
            'es_activo' => $this->input->post('es_activo'),
        );
        $this->db->insert('product_cat', $data);
    }
    function products_category_update($id_prodcat)
    {
        $data = array (
            'id_catsub' => $this->input->post('id_catsub'),
            'id_product' => $this->input->post('id_product'),
            'es_activo' => $this->input->post('es_activo'),
        );
        $this->db->where('id_prod_cat', $id_prod_cat);
        $this->db->update('product_cat', $data);
    }
    function products_category_delete($id_prod_cat)
    {
        $this->db->where('id_prod_cat', $id_prod_cat);
        $this->db->delete('product_cat');
    }
     /* Metodos para los totales por productos.*/
    function total_products_show()
    {
        $query = $this->db->query('SELECT id_totales,id_producto, cantidad_producto FROM totales_actuales');
        return $query->result->result();
    }
    function total_products_unico_registro($id_totales) {
        $query = $this->db->query('SELECT * FROM totales_actuales WHERE `id_totales` =' .$id_totales);
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
            'id_producto' => $this->input->post('id_producto'),
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
