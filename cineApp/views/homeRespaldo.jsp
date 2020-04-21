<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
	pageEncoding="ISO-8859-1"%>
<%@taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c"%>
<%@taglib uri="http://java.sun.com/jsp/jstl/fmt" prefix="fmt"%>
<%@taglib uri="http://www.springframework.org/tags" prefix="spring"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Bienvenido a CineApp</title>
<spring:url value="/resources" var="urlPublic" />
<link rel="stylesheet" href="${urlPublic}/bootstrap/css/bootstrap.min.css">	
</head>

<body>

	<%--
	<h1>Lista de Pel�culas</h1>
	
	<ol>
		<c:forEach items="${ pel�culas }" var="pel�cula">
			<li>${pel�cula}</li>
		</c:forEach>		
	</ol>
 --%>

	<div class="card">
		<div class="card-header">Tabla de Pel�culas</div>
		<div class="card-body">

			<Table class="table table-striped table-bordered table-hover">
				<thead class="thead-dark">
					<tr>
						<th>Id</th>
						<th>T�tulo</th>
						<th>Duraci�n</th>
						<th>Clasificaci�n</th>
						<th>G�nero</th>
						<th>Imagen</th>
						<th>Fecha Estreno</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
					<c:forEach items="${ pel�culas}" var="pel�cula">
						<tr>
							<td>${pel�cula.id}</td>
							<td>${pel�cula.t�tulo}</td>
							<td>${pel�cula.duraci�n}min</td>
							<td>${pel�cula.clasificaci�n}</td>
							<td>${pel�cula.g�nero}</td>
							<td><img src="${urlPublic}/images/${pel�cula.imagen}" width="80" height="100"></td>
							<td><fmt:formatDate value="${pel�cula.fechaEstreno}" pattern="dd-MM-yyyy"/></td>
							<td>
								<c:choose>
									<c:when test="${pel�cula.status=='Activa'}">
										<span class="label label-success">ACTIVA</span>
									</c:when>
									
									<c:otherwise>
										<span class="label label-danger">INACTIVA</span>
									</c:otherwise>
								</c:choose>							
							</td>
						</tr>
					</c:forEach>
				</tbody>
			</Table>
		</div>
	</div>

</body>
</html>