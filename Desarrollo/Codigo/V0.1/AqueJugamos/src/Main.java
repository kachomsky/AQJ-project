
import java.sql.ResultSet;
import java.sql.Connection;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import com.mysql.jdbc.jdbc2.optional.MysqlDataSource;


public class Main {

	public static void main(String[] args) throws SQLException {
		// TODO Auto-generated method stub
				
				AplicacioBD bd = new AplicacioBD();
				bd. mostrarJocs();
				bd.carregarJocsAlternatius();
				bd.carregarJocsTaula();
				for(JocTaula joc : bd.llistaJocsTaula)
				{
					System.out.println(" "+ joc.getIdCategoria()+ " "+ joc.getImagen());
				}

			}
	
	public void login()
	{
		
	}


	}

	

