<ul class="nav nav-pills flex-column gap-1 pt-3 ">
    <li class="nav-item">
        <a class="nav-link {{ ($menu ?? '') == 'home' ? 'active' : '' }}" href="/home">
            <i class="bi bi-house me-2"></i>Courses
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ ($menu ?? '') == 'profile' ? 'active' : '' }}" href="/profile">
            <i class="bi bi-person me-2"></i>Students
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link {{ ($menu ?? '') == 'jadwal' ? 'active' : '' }}" href="/jadwal">
            <i class="bi bi-calendar-week me-2"></i>Grades
        </a>
    </li>
</ul>
