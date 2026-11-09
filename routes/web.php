
<?php

use Illuminate\Support\Facades\Route;

Route::redirect('/', '/login');

// AUTENTICAÇÃO
Route::view('/login', 'admin.auth.login')->name('login');

Route::post('/login', function () {
    return redirect()->route('dashboard');
})->name('login.submit');

Route::view('/forgot', 'admin.auth.forgot')->name('password.forgot');
Route::view('/lock-screen', 'admin.auth.lock-screen')->name('lock-screen');

// DASHBOARD
Route::view('/dashboard', 'admin.Dashboard.index')->name('dashboard');

// MÉDICOS
Route::view('/doctors', 'admin.doctors.index')->name('doctors.index');
Route::view('/doctors/create', 'admin.doctors.create')->name('doctors.create');
Route::view('/doctors/edit', 'admin.doctors.edit')->name('doctors.edit');

// PACIENTES
Route::view('/patients', 'admin.patients.index')->name('patients.index');
Route::view('/patients/create', 'admin.patients.create')->name('patients.create');
Route::view('/patients/edit', 'admin.patients.edit')->name('patients.edit');

// CONSULTAS
Route::view('/appointments', 'admin.appointments.index')->name('appointments.index');
Route::view('/appointments/create', 'admin.appointments.create')->name('appointments.create');
Route::view('/appointments/edit', 'admin.appointments.edit')->name('appointments.edit');

// AGENDAMENTOS
Route::view('/schedules', 'admin.schedules.index')->name('schedules.index');
Route::view('/schedules/create', 'admin.schedules.create')->name('schedules.create');
Route::view('/schedules/edit', 'admin.schedules.edit')->name('schedules.edit');
Route::view('/schedule', 'admin.schedules.index');

// DEPARTAMENTOS
Route::view('/departments', 'admin.departments.index')->name('departments.index');
Route::view('/departments/create', 'admin.departments.create')->name('departments.create');
Route::view('/departments/edit', 'admin.departments.edit')->name('departments.edit');

// FUNCIONÁRIOS
Route::view('/employees', 'admin.employees.index')->name('employees.index');
Route::view('/employees/create', 'admin.employees.create')->name('employees.create');
Route::view('/employees/edit', 'admin.employees.edit')->name('employees.edit');
Route::view('/employees/attendance', 'admin.employees.attendance')->name('employees.attendance');
Route::view('/attendance', 'admin.employees.attendance.index');

// FACTURAS
Route::view('/invoices', 'admin.invoices.index')->name('invoices.index');
Route::view('/invoices/create', 'admin.invoices.create')->name('invoices.create');
Route::view('/invoices/edit', 'admin.invoices.edit')->name('invoices.edit');
Route::view('/invoices/show', 'admin.invoices.show')->name('invoices.show');

// PAGAMENTOS
Route::view('/payments', 'admin.payments.index')->name('payments.index');

// DESPESAS
Route::view('/expenses', 'admin.expenses.index')->name('expenses.index');
Route::view('/expenses/create', 'admin.expenses.create')->name('expenses.create');
Route::view('/expenses/edit', 'admin.expenses.edit')->name('expenses.edit');

// IMPOSTOS
Route::view('/taxes', 'admin.taxes.index')->name('taxes.index');
Route::view('/taxes/create', 'admin.taxes.create')->name('taxes.create');
Route::view('/taxes/edit', 'admin.taxes.edit')->name('taxes.edit');

// ACTIVIDADES
Route::view('/activities', 'admin.activities.index')->name('activities.index');

// RELATÓRIOS
Route::view('/reports/expenses', 'admin.reports.expenses')->name('reports.expenses');
Route::view('/reports/invoices', 'admin.reports.invoices')->name('reports.invoices');
Route::view('/expense-reports', 'admin.reports.expenses');

// CONFIGURAÇÕES
Route::view('/settings', 'admin.settings.index')->name('settings.index');
Route::view('/settings/localization', 'admin.settings.localization.index')->name('settings.localization.index');
Route::view('/settings/theme', 'admin.settings.theme.index')->name('settings.theme.index');
Route::view('/settings/roles', 'admin.settings.roles.roles')->name('settings.roles.roles');
Route::view('/settings/roles/create-role', 'admin.settings.roles.create-role')->name('settings.roles.create-role');
Route::view('/settings/roles/edit', 'admin.settings.roles.edit')->name('settings.roles.edit');
Route::view('/settings/email', 'admin.settings.Email.index')->name('settings.email');
Route::view('/settings/invoice-settings', 'admin.settings.invoice-settings.index')->name('settings.invoice-settings.index');
Route::view('/settings/notification', 'admin.settings.notification.index')->name('settings.notification');
Route::view('/settings/password', 'admin.settings.password.index')->name('settings.password');

// PERFIL
Route::view('/profile', 'admin.profile.index')->name('profile.index');
Route::view('/profile/edit', 'admin.profile.edit')->name('profile.edit');

// CALENDÁRIO
Route::view('/calendar', 'admin.calendar.index')->name('calendar.index');
