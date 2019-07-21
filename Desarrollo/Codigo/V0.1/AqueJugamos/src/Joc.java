
public class Joc {

	private int idJuego;
	private int idCategoria;
	private String nomCategoria;
	private String nomJoc;
	private int dificultat;
	private int edat;
	private String numeroJugadors;
	private String duracio;
	private String tipo;
	private String descripcio;
	private String valoracio;
	private int idTipo;
	private String imagen;
	
	public Joc(int idJuego, int idCategoria, String nomCategoria, String nomJoc, int dificultat, int edat,
			String numeroJugadors, String duracio, String tipo, String descripcio, String valoracio, int idTipo,
			 String imagen) {
		super();
		this.idJuego = idJuego;
		this.idCategoria = idCategoria;
		this.nomCategoria = nomCategoria;
		this.nomJoc = nomJoc;
		this.dificultat = dificultat;
		this.edat = edat;
		this.numeroJugadors = numeroJugadors;
		this.duracio = duracio;
		this.tipo = tipo;
		this.descripcio = descripcio;
		this.valoracio = valoracio;
		this.idTipo = idTipo;
		this.imagen = imagen;
	}
	public Joc()
	{
		
	}
	public int getIdJuego() {
		return idJuego;
	}
	public void setIdJuego(int idJuego) {
		this.idJuego = idJuego;
	}
	public int getIdCategoria() {
		return idCategoria;
	}
	public void setIdCategoria(int idCategoria) {
		this.idCategoria = idCategoria;
	}
	public String getNomCategoria() {
		return nomCategoria;
	}
	public void setNomCategoria(String nomCategoria) {
		this.nomCategoria = nomCategoria;
	}
	public String getNomJoc() {
		return nomJoc;
	}
	public void setNomJoc(String nomJoc) {
		this.nomJoc = nomJoc;
	}
	public int getDificultat() {
		return dificultat;
	}
	public void setDificultat(int dificultat) {
		this.dificultat = dificultat;
	}
	public int getEdat() {
		return edat;
	}
	public void setEdat(int edat) {
		this.edat = edat;
	}
	public String getNumeroJugadors() {
		return numeroJugadors;
	}
	public void setNumeroJugadors(String numeroJugadors) {
		this.numeroJugadors = numeroJugadors;
	}
	public String getDuracio() {
		return duracio;
	}
	public void setDuracio(String duracio) {
		this.duracio = duracio;
	}
	public String getTipo() {
		return tipo;
	}
	public void setTipo(String tipo) {
		this.tipo = tipo;
	}
	public String getDescripcio() {
		return descripcio;
	}
	public void setDescripcio(String descripcio) {
		this.descripcio = descripcio;
	}
	public String getValoracio() {
		return valoracio;
	}
	public void setValoracio(String valoracio) {
		this.valoracio = valoracio;
	}
	public int getIdTipo() {
		return idTipo;
	}
	public void setIdTipo(int idTipo) {
		this.idTipo = idTipo;
	}
	public String getImagen() {
		return imagen;
	}
	public void setImagen(String imagen) {
		this.imagen = imagen;
	}


	
	
}
