<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class ServiceHubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Simular nombres y apellidos más realistas para los clientes
        $names = ['Juan', 'Carlos', 'Ana', 'Laura', 'Pedro', 'Maria', 'Luis', 'Sofia', 'Jose', 'Elena'];
        $lastNames = ['Gomez', 'Perez', 'Lopez', 'Martinez', 'Rodriguez', 'Hernandez', 'Garcia', 'Sanchez', 'Diaz', 'Ruiz'];

        for ($i = 1; $i <= 10; $i++) {
            DB::table('clients')->insert([
                'FirstName' => $names[$i - 1],
                'LastName' => $lastNames[$i - 1],
                'Email' => strtolower($names[$i - 1]) . $i . '@example.com',
                'PhoneNumber' => '1289' . $i,
                'Password' => Hash::make('password')
            ]);
        }

        // Insertar ubicaciones con datos más específicos
        $cities = ['Ciudad de Mexico', 'Guadalajara', 'Monterrey', 'Puebla', 'Cancun', 'Tijuana', 'Querétaro', 'Mérida', 'León', 'Aguascalientes'];

        for ($i = 1; $i <= 10; $i++) {
            DB::table('locations')->insert([
                'IdClient' => $i,
                'Address' => 'Calle ' . $i,
                'City' => $cities[$i - 1],
                'State' => 'Estado ' . $i,
                'postal_code' => '1000' . $i,
                'Country' => 'México'
            ]);
        }

        // Servicios realistas
        $serviceNames = ['Consultoría', 'Mantenimiento', 'Asesoría Legal', 'Limpieza', 'Instalación Eléctrica', 'Diseño Gráfico', 'Redacción', 'Desarrollo Web', 'Soporte Técnico', 'Asesoría Financiera'];

        for ($i = 1; $i <= 10; $i++) {
            DB::table('services')->insert([
                'NameService' => $serviceNames[$i - 1],
                'Description' => 'Descripción detallada del servicio ' . $i
            ]);
        }

        // Agenda de citas con fechas realistas
        for ($i = 1; $i <= 10; $i++) {
            DB::table('agenda')->insert([
                'IdClient' => $i,
                'IdService' => rand(1, 10),
                'DateAgenda' => Carbon::now()->addDays($i),
                'AgendaStatus' => 'pending'
            ]);
        }

        // Reseñas más específicas
        for ($i = 1; $i <= 10; $i++) {
            DB::table('reviews')->insert([
                'IdAgenda' => $i,
                'Rating' => rand(1, 5),
                'Comment' => 'Comentario sobre el servicio ' . $i,
                'DateReview' => Carbon::now()
            ]);
        }

        // Categorías realistas
        $categories = ['Tecnología', 'Consultoría', 'Mantenimiento', 'Marketing', 'Salud', 'Educación', 'Entretenimiento', 'Arte', 'Finanzas', 'Turismo'];

        for ($i = 1; $i <= 10; $i++) {
            DB::table('categories')->insert([
                'NameCategory' => $categories[$i - 1],
                'Description' => 'Descripción de la categoría ' . $i
            ]);
        }

        // Asociación de servicios a categorías
        for ($i = 1; $i <= 10; $i++) {
            DB::table('service_category')->insert([
                'IdService' => rand(1, 10),
                'IdCategory' => rand(1, 10)
            ]);
        }

        // Palabras clave más cercanas a categorías
        for ($i = 1; $i <= 10; $i++) {
            DB::table('keywords')->insert([
                'Word' => 'PalabraClave' . $i,
                'IdCategory' => rand(1, 10)
            ]);
        }

        // Profesionales con nombres más comunes
        $professionals = ['Juan', 'Carlos', 'Ana', 'Laura', 'Pedro', 'Maria', 'Luis', 'Sofia', 'Jose', 'Elena'];
        $professionalLastNames = ['Gomez', 'Perez', 'Lopez', 'Martinez', 'Rodriguez', 'Hernandez', 'Garcia', 'Sanchez', 'Diaz', 'Ruiz'];

        for ($i = 1; $i <= 10; $i++) {
            DB::table('professionals')->insert([
                'FirstName' => $professionals[$i - 1],
                'LastName' => $professionalLastNames[$i - 1],
                'CURP' => Str::random(18),
                'RFC' => Str::random(13),
                'Experience' => 'Experiencia en área ' . $i,
                'Availability' => '9 AM - 6 PM',
                'Email' => strtolower($professionals[$i - 1]) . $i . '@example.com',
                'Password' => Hash::make('password')
            ]);
        }

        // Servicios de profesionales
        for ($i = 1; $i <= 10; $i++) {
            DB::table('professional_service')->insert([
                'IdProfessional' => rand(1, 10),
                'IdService' => rand(1, 10),
                'Email' => 'contacto' . $i . '@example.com',
                'PhoneNumber' => '5788' . $i,
                'PriceHour' => rand(100, 500)
            ]);
        }

        // Suscripciones y pagos
        for ($i = 1; $i <= 10; $i++) {
            DB::table('type_suscriptions')->insert([
                'NameSuscription' => 'Suscripción ' . $i,
                'Description' => 'Descripción ' . $i,
                'Price' => rand(50, 500)
            ]);
        }

        for ($i = 1; $i <= 10; $i++) {
            DB::table('suscriptions')->insert([
                'IdProfessional' => rand(1, 10),
                'DateStart' => Carbon::now(),
                'EndDate' => Carbon::now()->addMonths(6),
                'IdTypeSuscription' => rand(1, 10),
                'StatusSuscription' => 'active'
            ]);
        }

        for ($i = 1; $i <= 10; $i++) {
            DB::table('type_payments')->insert([
                'Type' => 'Pago ' . $i,
                'Entity' => 'Entidad ' . $i
            ]);
        }

        for ($i = 1; $i <= 10; $i++) {
            DB::table('payments')->insert([
                'IdSuscription' => rand(1, 10),
                'Status' => 'completed',
                'Amount' => rand(50, 500),
                'IdTypePayment' => rand(1, 10)
            ]);
        }
    }
}
