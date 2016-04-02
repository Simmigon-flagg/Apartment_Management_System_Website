<?php sql = "SELECT * FROM user;"; 
 sql = "SELECT * FROM apartmentlocation;";
 sql = "SELECT * FROM applicant;";

//Return Every Thing
	sql = "SELECT "
					+ "firstName,"
					+ "lastName,"
					+ "userName,"
					+ "dateOfBirth,"
					+ "pass,"
					+ "accepted,"
					+ "socialSecurity,"
					+ "streetAddress,"
					+ "City,"
					+ "Zip,"
					+ "phoneNumber,"
					+ "employedBy,"
					+ "JobTitle,\n"
					+ "monthlyGrossPay,"
					+ "criminalBackgroundCheck,"
					+ "location,"
					+ "aptNumber,"
					+ "numberOfBedrooms,"
					+ "price\n"
					+ "FROM user\n"
					+ "INNER JOIN applicant\n"
					+ "ON user.iduser=applicant.iduser\n"
					+ "INNER JOIN apartmentlocation\n"
					+ "ON applicant.iduser=apartmentlocation.iduser;";
				
				
				
				
				
				
//Login
  sql = "SELECT userName,pass,firstName FROM user"
                + " WHERE userName = \'" + email + "\'"
                + " AND pass = \'" + password + "\';";				
				
		?>		