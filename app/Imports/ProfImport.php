<?php

namespace App\Imports;

use App\Prof;
use Throwable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithMapping;

class ProfImport implements ToModel, WithHeadingRow, SkipsOnError, WithValidation, SkipsOnFailure, WithBatchInserts, WithChunkReading
{
    use Importable, SkipsFailures;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Prof([
            'nom_prof' => $row['nom'],
            'prenom_prof' => $row['prenom'],
            'adresse_prof' => $row['adresse'],
            'telephone_prof' => $row['telephone'],
            'email_prof' => $row['email'],
            'date_naissance_prof' => date('Y-m-d', strtotime($row['date_naissance'])),
            'username' => strtolower(substr($row['prenom'],0,2).'.'.$row['nom']),
            'password' => Hash::make(strtolower(substr($row['prenom'],0,2).'.'.$row['nom'])),

            'admin_id' => Auth::id(),
        ]);
    }

    public function onError(Throwable $error){
        
    }

    public function rules(): array{
        return [
            '*.email' => 'email|unique:profs,email_prof',
            // 'date_naissance' => 'date',
            'username' => 'unique:profs,username',
        ];
    }

    public function batchSize(): int
    {
        return 1000;
    }

    public function chunkSize(): int
    {
        return 1000;
    }

   
}
