window.onload = function () {
    console.log('Page loaded');
}

(function() {
    console.log('Loaded');

    const studentsHeader = document.getElementsByTagName('header')[0];
    console.log(studentsHeader);
    studentsHeader.innerHTML += ' Marks';

    const headerRow = document.getElementById('header-row');
    console.log(headerRow);

    // headerRow.innerHTML = 'jksdj'
    const actionTh = document.createElement('th');
    actionTh.innerHTML = 'Action';
    headerRow.append(actionTh);

    const markTh = document.createElement('th');
    const markText = document.createTextNode('Mark');
    markTh.append(markText);
    // actionTh.before(markTh);
    headerRow.append(markTh);
    markTh.after(actionTh);

    const studentRow = document.getElementsByClassName('student')[0];
    const studentDelete = document.getElementById('delete');

    const markTd = document.createElement('td');
    markTd.innerHTML = '5';
    studentDelete.before(markTd);

    const studentDeleteBtn = document.querySelector('#delete button');
    studentDeleteBtn.addEventListener('click', deleteStudent);

    const studentAddBtn = document.querySelectorAll('[type="submit"]')[0];
    studentAddBtn.addEventListener('click', addStudent);
}());

function deleteStudent(event) {
    event.stopPropagation();

    const studentToDelete = event.target.parentNode.parentNode;
    studentToDelete.parentNode.removeChild(studentToDelete);
}

function addStudent(event) {
    event.preventDefault();

    const firstName = document.getElementsByName('first-name')[0];
    const lastName = document.getElementsByName('last-name')[0];
    const fn = document.getElementsByName('fn')[0];
    const mark = document.getElementsByName('mark')[0];

    const student = {
        firstName: firstName.value,
        lastName: lastName.value,
        fn: fn.value,
        mark: mark.value
    };

    createStudentRow(student);

    firstName.value = '';
    lastName.value = '';
    fn.value = '';
    mark.value = '';
}

function createStudentRow(student) {
    const tbody = document.getElementsByTagName('tbody')[0];

    const tr = document.createElement('tr');
    tr.setAttribute('class', 'student');

    const firstNameTd = document.createElement('td');
    firstNameTd.innerHTML = student.firstName;

    const lastNameTd = document.createElement('td');
    lastNameTd.innerHTML = student.lastName;

    const fnTd = document.createElement('td');
    fnTd.innerHTML = student.fn;

    const markTd = document.createElement('td');
    markTd.innerHTML = student.mark;

    const deleteTd = document.createElement('td');
    const deleteBtn = document.createElement('button');
    deleteBtn.innerHTML = 'Delete';
    deleteBtn.addEventListener('click', deleteStudent);
    deleteTd.appendChild(deleteBtn);

    tr.append(firstNameTd, lastNameTd, fnTd, markTd, deleteTd);
    tbody.appendChild(tr);
}