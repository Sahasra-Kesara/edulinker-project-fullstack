const classes = [
    {
        title: 'Mathematics',
        description: 'Learn advanced mathematics with our expert tutors.',
        image: 'https://dummyimage.com/200x200/000/fff&text=teacher',
        grade: 'Grade 6 - 11',
        teacher: 'John Doe'
    },
    {
        title: 'Science',
        description: 'Explore the world of science with interactive lessons.',
        image: 'https://dummyimage.com/200x200/000/fff&text=teacher',
        grade: 'Grade 6 - 11',
        teacher: 'Jane Smith'
    },
    {
        title: 'English',
        description: 'Improve your English skills with personalized tutoring.',
        image: 'https://dummyimage.com/200x200/000/fff&text=teacher',
        grade: 'Grade 6 - 11',
        teacher: 'Raj Rajamanoharan'
    },
    {
        title: 'History',
        description: 'Learn about the past with our engaging history lessons.',
        image: 'https://dummyimage.com/200x200/000/fff&text=teacher',
        grade: 'Grade 6 - 11',
        teacher: 'Emily Johnson'
    },
    {
        title: 'Geography',
        description: 'Explore the world with our interactive geography lessons.',
        image: 'https://dummyimage.com/200x200/000/fff&text=teacher',
        grade: 'Grade 6 - 11',
        teacher: 'Michael Brown'
    },
    {
        title: 'Computer Science',
        description: 'Learn programming and computer science with our expert tutors.',
        image: 'https://dummyimage.com/200x200/000/fff&text=teacher',
        grade: 'Grade 6 - 11',
        teacher: 'Sarah Davis'
    }
];


function searchClasses() {
    const searchInput = document.getElementById('search-input').value.toLowerCase();
    const searchResults = document.getElementById('search-results');
    searchResults.innerHTML = '';

    const filteredClasses = classes.filter(c => c.title.toLowerCase().includes(searchInput) || c.description.toLowerCase().includes(searchInput));

    filteredClasses.forEach(c => {
        const card = document.createElement('div');
        card.className = 'col-md-4';
        card.innerHTML = `
            <div class="search-result-card">
                <img src="${c.image}" class="card-img-top" alt="${c.title}">
                <div class="card-body">
                    <h5 class="card-title">${c.title}</h5>
                    <p class="card-text">${c.description}</p>
                    <p class="card-footer" style="margin-top: 20px;">${c.grade}</p>
                    <p class="card-footer">By <span>${c.teacher}</span></p>
                    <a href="#" class="btn btn-primary">Enroll Now</a>
                </div>
            </div>
        `;
        searchResults.appendChild(card);
    });

    if (filteredClasses.length === 0) {
        searchResults.innerHTML = '<p class="col-12 text-center">No classes found.</p>';
    }
}

function openTab(tabName) {
    switch (tabName) {
        case 'home':
            document.getElementById("recommended_classes").style.display = "block";
            document.getElementById("search_teacher").style.display = "block";
            document.getElementById("student_profile_management").style.display = "none";
            document.getElementById("add_review").style.display = "none";
            break;
        case 'profile':
            document.getElementById("recommended_classes").style.display = "none";
            document.getElementById("search_teacher").style.display = "none";
            document.getElementById("student_profile_management").style.display = "block";
            document.getElementById("add_review").style.display = "none";
            break;
        case 'reviews':
            document.getElementById("recommended_classes").style.display = "none";
            document.getElementById("search_teacher").style.display = "none";
            document.getElementById("student_profile_management").style.display = "none";
            document.getElementById("add_review").style.display = "block";
            break;
        default:
            document.getElementById("recommended_classes").style.display = "block";
            document.getElementById("search_teacher").style.display = "block";
            document.getElementById("student_profile_management").style.display = "none";
            document.getElementById("add_review").style.display = "none";
            break;
    }
}
