
public class Usuari {

	private int idUsuari;
	private String nomUsuari;
	private String password;
	private String mail;
	private boolean logejat;
	private AplicacioBD bd;
	
	public Usuari(int idUsuari, String nomUsuari, String password, String mail) {
		super();
		this.idUsuari = idUsuari;
		this.nomUsuari = nomUsuari;
		this.password = password;
		this.mail = mail;
		this.logejat = true;
	}
	
	public void logout()
	{
		this.logejat = false;
	}
	public int getIdUsuari() {
		return idUsuari;
	}
	public void setIdUsuari(int idUsuari) {
		this.idUsuari = idUsuari;
	}
	public String getNomUsuari() {
		return nomUsuari;
	}
	public void setNomUsuari(String nomUsuari) {
		this.nomUsuari = nomUsuari;
	}
	public String getPassword() {
		return password;
	}
	public void setPassword(String password) {
		this.password = password;
	}
	public String getMail() {
		return mail;
	}
	public void setMail(String mail) {
		this.mail = mail;
	}
	public boolean isLogejat() {
		return logejat;
	}
	public void setLogejat(boolean logejat) {
		this.logejat = logejat;
	}
	
	
	
	
	
}
