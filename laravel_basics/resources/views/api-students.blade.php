<!DOCTYPE html>
<html>
<head>
    <title>API Students</title>
</head>
<body>

    <h1>Students from API</h1>

    <button onclick="loadStudents()">Load Students</button>

    <div id="students"></div>

    <script>
        function loadStudents() {
            fetch('/api/students')
                .then(response => response.json())
                .then(data => {
                    const studentsDiv = document.getElementById('students');

                    studentsDiv.innerHTML = '';

                    data.data.forEach(student => {
                        studentsDiv.innerHTML += `
                            <div>
                                <h3>${student.name}</h3>
                                <p>Email: ${student.email}</p>
                                <p>Course ID: ${student.course_id}</p>
                                <hr>
                            </div>
                        `;
                    });
                })
                .catch(error => {
                    console.error('Error:', error);
                });
        }
    </script>

</body>
</html>