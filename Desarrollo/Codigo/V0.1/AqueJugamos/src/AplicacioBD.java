
import java.sql.ResultSet;
import java.sql.Connection;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;

import com.mysql.jdbc.jdbc2.optional.MysqlDataSource;

public class AplicacioBD {
	
	private MysqlDataSource dataSource;
	private Connection conn;
	private Usuari usuari; 
	public List<JocAlternatiu> llistaAlternatius = new ArrayList<JocAlternatiu>();
	public List<JocTaula> llistaJocsTaula = new ArrayList<JocTaula>();
	
	AplicacioBD() throws SQLException
	{
		this.dataSource = new MysqlDataSource();
		this.dataSource.setUser("sql11229247");
		this.dataSource.setPassword("eMJd3BPRLU");
		this.dataSource.setServerName("sql11.freemysqlhosting.net");
		this.dataSource.setDatabaseName("sql11229247");
		this.conn = this.dataSource.getConnection();
	}
	
	public void carregarJocsAlternatius() throws SQLException{
		
		Statement stmt = this.conn.createStatement();
		ResultSet rs = stmt.executeQuery("SELECT J.idJuego, J.idCategoria, C.NombreCategoria, J.NombreJuego, J.Dificultad, J.Edad,J.Jugadores,J.Tiempo, T.Nombre, J.Descripcion, J.Valoracion, J.Materiales, J.idTipo, J.Imagen FROM Juego J, Categoria C,Tipo T WHERE J.idCategoria=C.idCategoria AND J.idTipo=T.idTipo AND C.idCategoria=2;");
		
		while(rs.next())
		{
			int idJuego=rs.getInt(1);
			int idCategoria=rs.getInt(2);
			String nombreCategoria = rs.getString(3);
			String nombreJuego=rs.getString(4);
			int dificultad = rs.getInt(5);
			int edat = rs.getInt(6);
			String numeroJugadores = rs.getString(7);
			String tiempo = rs.getString(8);
			String tipo = rs.getString(9);
			String descripcion = rs.getString(10);
			String valoracion = rs.getString(11);
			String materiales = rs.getString(12);
			int idTipo =rs.getInt(13);
			String imagen = rs.getString(14);
			JocAlternatiu joc = new JocAlternatiu(idJuego,idCategoria,nombreCategoria,nombreJuego,dificultad,edat, numeroJugadores,tiempo, tipo, descripcion,valoracion,idTipo, imagen,  materiales);
			llistaAlternatius.add(joc);
			/*System.out.println(idJuego + " " + idCategoria+ " " + nombreCategoria + " " + nombreJuego +" " + dificultad +" " + edat
					+" " + numeroJugadores+ " " + tiempo +" " + tipo +" " + descripcion +" " + valoracion +" " + materiales +" " + idTipo +" " + imagen);*/
		}
		rs.close();
		stmt.close();
	}
	
	public void carregarJocsTaula() throws SQLException
	{
		Statement stmt = this.conn.createStatement();
		ResultSet rs = stmt.executeQuery("SELECT J.idJuego, J.idCategoria, C.NombreCategoria, J.NombreJuego, J.Dificultad, J.Edad,J.Jugadores,J.Tiempo, T.Nombre, J.Descripcion, J.Valoracion, J.idTipo, J.Imagen FROM Juego J, Categoria C,Tipo T WHERE J.idCategoria=C.idCategoria AND J.idTipo=T.idTipo AND C.idCategoria=1;");
		
		while(rs.next())
		{
			int idJuego=rs.getInt(1);
			int idCategoria=rs.getInt(2);
			String nombreCategoria = rs.getString(3);
			String nombreJuego=rs.getString(4);
			int dificultad = rs.getInt(5);
			int edat = rs.getInt(6);
			String numeroJugadores = rs.getString(7);
			String tiempo = rs.getString(8);
			String tipo = rs.getString(9);
			String descripcion = rs.getString(10);
			String valoracion = rs.getString(11);
			int idTipo =rs.getInt(12);
			String imagen = rs.getString(13);
			JocTaula joc = new JocTaula(idJuego,idCategoria,nombreCategoria,nombreJuego,dificultad,edat, numeroJugadores,tiempo, tipo, descripcion,valoracion,idTipo, imagen);
			llistaJocsTaula.add(joc);
			/*System.out.println(idJuego + " " + idCategoria+ " " + nombreCategoria + " " + nombreJuego +" " + dificultad +" " + edat
					+" " + numeroJugadores+ " " + tiempo +" " + tipo +" " + descripcion +" " + valoracion +" " + materiales +" " + idTipo +" " + imagen);*/
		}
		rs.close();
		stmt.close();
	}
	public void mostrarJocs() throws SQLException
	{
		System.out.println("Aquests son els jocs que tenim disponibles\n");
		Statement stmt = this.conn.createStatement();
		ResultSet rs = stmt.executeQuery("SELECT J.idJuego, J.NombreJuego, J.Descripcion, J.Imagen, C.NombreCategoria FROM Juego J, Categoria C WHERE J.idCategoria=C.idCategoria");
		while(rs.next())
		{
			String nombre=rs.getString(1);
			String descripcion=rs.getString(2);
			String nombreCategoria=rs.getString(3);
			System.out.println(nombre + " " + descripcion+ " " + nombreCategoria);
		}
		
		rs.close();
		stmt.close();
		
	}
	
	public boolean comprobarUsuari(String username, String password)
	{
		boolean estaRegistrat = false;
		return estaRegistrat;
	}
	
	public void afegirLlistaPreferits(int idJoc, String userName)
	{
		
	}
	
	public void mostrarLlistaPreferits()
	{
		
	}
	
	public void consultaDadesUsuari()
	{
		
	}

}
