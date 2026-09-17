# Tech Stack

Landing page dibangun menggunakan stack yang sederhana dan mudah dikembangkan jika nantinya membutuhkan fitur tambahan.

## Backend

**Laravel**

Digunakan sebagai framework utama untuk backend, routing, business logic, dan pengelolaan data aplikasi.

## Frontend

**Livewire**

Digunakan untuk membuat komponen interaktif tanpa perlu menggunakan framework JavaScript frontend terpisah.

**Blade**

Digunakan untuk struktur halaman dan reusable component.

**Tailwind CSS**

Digunakan untuk styling dan responsive layout.

## Database

**MySQL**

Digunakan untuk menyimpan data yang nantinya dibutuhkan website seperti:

- Data proyek / portfolio
- Layanan
- Informasi kontak
- Pengaturan website

---

# Struktur Teknis MVP

Laravel  
├── Blade  
├── Livewire  
├── Tailwind CSS  
└── MySQL

---

# Implementasi MVP

Untuk versi pertama, halaman utama tetap dibuat sebagai landing page yang ringan.

Livewire digunakan hanya pada bagian yang membutuhkan interaksi seperti:

- Mobile navigation
- Project gallery
- Filter portfolio jika diperlukan
- Form konsultasi jika nantinya ditambahkan

Konten utama seperti Hero, Tentang, Layanan, Area Pengerjaan, CTA, dan Footer tetap menggunakan Blade component biasa.

MySQL digunakan terutama untuk data portfolio proyek agar proyek baru nantinya bisa ditambahkan tanpa mengubah struktur landing page.

---

# Database MVP

## projects

- id
- title
- slug
- location
- project_type
- description
- year
- cover_image
- is_featured
- created_at
- updated_at

## services

- id
- name
- slug
- description
- sort_order
- created_at
- updated_at

## site_settings

- id
- company_name
- whatsapp
- email
- instagram
- address
- working_hours
- created_at
- updated_at

---

# Scope Teknis

## Digunakan

- Laravel
- Livewire
- Blade
- Tailwind CSS
- MySQL
- Responsive Design
- WhatsApp CTA
- Dynamic Project Portfolio

## Belum Dibutuhkan

- React / Vue
- REST API terpisah
- Authentication
- Admin dashboard kompleks
- Payment gateway
- Booking system
- Customer portal

Prinsip MVP:

**Laravel + Livewire + MySQL, tanpa menambahkan kompleksitas yang belum dibutuhkan.**