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
	<h1>Lista de Películas</h1>
	
	<ol>
		<c:forEach items="${ películas }" var="película">
			<li>${película}</li>
		</c:forEach>		
	</ol>
 --%>

	<div class="card">
		<div class="card-header">Tabla de Películas</div>
		<div class="card-body">

			<Table class="table table-striped table-bordered table-hover">
				<thead class="thead-dark">
					<tr>
						<th>Id</th>
						<th>Título</th>
						<th>Duración</th>
						<th>Clasificación</th>
						<th>Género</th>
						<th>Imagen</th>
						<th>Fecha Estreno</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
					<c:forEach items="${ películas}" var="película">
						<tr>
							<td>${película.id}</td>
							<td>${película.título}</td>
							<td>${película.duración}min</td>
							<td>${película.clasificación}</td>
							<td>${película.género}</td>
							<td><img src="${urlPublic}/images/${película.imagen}" width="80" height="100"></td>
							<td><fmt:formatDate value="${película.fechaEstreno}" pattern="dd-MM-yyyy"/></td>
							<td>
								<c:choose>
									<c:when test="${película.status=='Activa'}">
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