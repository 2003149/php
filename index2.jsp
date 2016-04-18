<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1" %>
<%@page import="java.util.Calendar"%>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html> 
	<head>
			<title>My test page </title> 


	</head> 
	 <%
	 Calendar nu = Calendar.getInstance();
	 int huidigUur = nu.get(Calendar.HOUR_OF_DAY);
	 if(huidigUur < 12 && huidigUur > 0 )out.println("goedemorgen heer/mevrouw");
	 else out.println("Goedeavond heer/mevrouw");
	%> 
	<body> 


	  
	  
	  
	<h2></h2> 
	  
	</body> 
</html>