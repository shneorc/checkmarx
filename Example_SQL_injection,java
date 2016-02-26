conn = pool.getConnection( );
String sql = "select * from user where username='" + username +"' and password='" + password + "'";
stmt = conn.createStatement();
rs = stmt.executeQuery(sql);
if (rs.next()) {
loggedIn = true;
	out.println("Successfully logged in");
} else {
	out.println("Username and/or password not recognized");
}
