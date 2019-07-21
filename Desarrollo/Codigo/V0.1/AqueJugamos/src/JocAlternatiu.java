
public class JocAlternatiu extends Joc{
private String materials;

	
	
	public JocAlternatiu(int idJuego, int idCategoria, String nomCategoria, String nomJoc, int dificultat, int edat,
		String numeroJugadors, String duracio, String tipo, String descripcio, String valoracio, int idTipo, String imagen,String materials) {
	super(idJuego, idCategoria, nomCategoria, nomJoc, dificultat, edat, numeroJugadors, duracio, tipo, descripcio,
			valoracio, idTipo, imagen);
	// TODO Auto-generated constructor stub
	this.materials = materials;
}
	public JocAlternatiu()
	{
		
	}
	public String getMaterials() {
		return materials;
	}
	public void setMaterials(String materials) {
		this.materials = materials;
	}
	
	

	
}
