/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package modelos.database;

/**
 *
 * @author jose_
 */
public class Utilidades {
    
    public static java.sql.Date JavaDateToSqlDate(java.util.Date fecha){
        return new java.sql.Date(fecha.getTime());
    }
    
    public static java.util.Date SqlDateToJavaDate(java.sql.Date fecha){
        return new java.util.Date(fecha.getTime());
    }
    
}