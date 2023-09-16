<?php

namespace App\Data;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;

class EmployeeData
{
    public static function getEmployee()
    {
        $employeeList = [
            [
                'id' => 'BDI-001',
                'name' => 'Ethan Thompson',
                'birthday' => '2006-10-23',
            ],
            [
                'id' => 'BDI-002',
                'name' => 'Ava Williams',
                'birthday' => '2010-11-26',
            ],
            [
                'id' => 'BDI-003',
                'name' => 'Benjamin Davis',
                'birthday' => '2007-10-24',
            ],
            [
                'id' => 'BDI-004',
                'name' => 'Olivia Martinez',
                'birthday' => '2002-08-19',
            ],
            [
                'id' => 'BDI-005',
                'name' => 'Liam Garcia',
                'birthday' => '1998-07-16',
            ],
            [
                'id' => 'BDI-006',
                'name' => 'Mia Smith',
                'birthday' => '1996-06-14',
            ],
            [
                'id' => 'BDI-007',
                'name' => 'Samuel Johnson',
                'birthday' => '2010-11-26',
            ],
            [
                'id' => 'BDI-008',
                'name' => 'Sophia Harris',
                'birthday' => '2004-09-21',
            ],
            [
                'id' => 'BDI-009',
                'name' => 'Daniel Lee',
                'birthday' => '1982-01-02',
            ],
            [
                'id' => 'BDI-010',
                'name' => 'Charlotte Turner',
                'birthday' => '2003-09-20',
            ],
            [
                'id' => 'BDI-011',
                'name' => 'Henry Martin',
                'birthday' => '1994-05-13',
            ],
            [
                'id' => 'BDI-012',
                'name' => 'Amelia Lewis',
                'birthday' => '1985-02-05',
            ],
            [
                'id' => 'BDI-013',
                'name' => 'Jackson Robinson',
                'birthday' => '1981-01-02',
            ],
            [
                'id' => 'BDI-014',
                'name' => 'Harper Clark',
                'birthday' => '1996-06-15',
            ],
            [
                'id' => 'BDI-015',
                'name' => 'Lucas Kang',
                'birthday' => '1984-02-05',
            ],
            [
                'id' => 'BDI-016',
                'name' => 'Evelyn Hall',
                'birthday' => '2004-09-21',
            ],
            [
                'id' => 'BDI-017',
                'name' => 'Alexander Young',
                'birthday' => '1986-03-06',
            ],
            [
                'id' => 'BDI-018',
                'name' => 'Grace Turner',
                'birthday' => '1980-01-01',
            ],
            [
                'id' => 'BDI-019',
                'name' => 'William Adams',
                'birthday' => '2004-09-21',
            ],
            [
                'id' => 'BDI-020',
                'name' => 'Victoria Baker',
                'birthday' => '2006-10-23',
            ],
            [
                'id' => 'BDI-021',
                'name' => 'James Hall',
                'birthday' => '1996-06-15',
            ],
            [
                'id' => 'BDI-022',
                'name' => 'Zoe Lewis',
                'birthday' => '2010-11-27',
            ],
            [
                'id' => 'BDI-023',
                'name' => 'Benjamin Reed',
                'birthday' => '1990-04-10',
            ],
            // next
            [
                'id' => 'BDI-024',
                'name' => 'Mia Collins',
                'birthday' => '1997-07-16',
            ],
            [
                'id' => 'BDI-025',
                'name' => 'Samuel White',
                'birthday' => '1990-04-09',
            ],
            [
                'id' => 'BDI-026',
                'name' => 'Ava Phillips',
                'birthday' => '1980-01-01',
            ],
            [
                'id' => 'BDI-027',
                'name' => 'David Rodriguez',
                'birthday' => '1986-03-06',
            ],
            [
                'id' => 'BDI-028',
                'name' => 'Lily Green',
                'birthday' => '1980-01-01',
            ],
            [
                'id' => 'BDI-029',
                'name' => 'Henry Turner',
                'birthday' => '2010-11-26',
            ],
            [
                'id' => 'BDI-030',
                'name' => 'Chloe Smith',
                'birthday' => '2000-08-18',
            ],
            [
                'id' => 'BDI-031',
                'name' => 'Michael Campbell',
                'birthday' => '2004-09-21',
            ],
            [
                'id' => 'BDI-032',
                'name' => 'Emily Anderson',
                'birthday' => '2011-11-27',
            ],
            [
                'id' => 'BDI-033',
                'name' => 'John Hernandez',
                'birthday' => '2006-10-23',
            ],
            // next
            [
                'id' => 'BDI-034',
                'name' => 'Abigail Scott',
                'birthday' => '2008-10-25',
            ],
            [
                'id' => 'BDI-035',
                'name' => 'Daniel Perez',
                'birthday' => '1998-07-16',
            ],
            [
                'id' => 'BDI-036',
                'name' => 'Ella Collins',
                'birthday' => '1990-04-09',
            ],
            [
                'id' => 'BDI-037',
                'name' => 'Matthew Sanchez',
                'birthday' => '1981-01-02',
            ],
            [
                'id' => 'BDI-038',
                'name' => 'Scarlett Taylor',
                'birthday' => '1995-06-13',
            ],
            [
                'id' => 'BDI-039',
                'name' => 'Samuel Mitchell',
                'birthday' => '1996-06-14',
            ],
            [
                'id' => 'BDI-040',
                'name' => 'Sophia Nelson',
                'birthday' => '2008-10-25',
            ],
            [
                'id' => 'BDI-041',
                'name' => 'David Brown',
                'birthday' => '2005-09-22',
            ],
            [
                'id' => 'BDI-042',
                'name' => 'Harper Johnson',
                'birthday' => '2004-09-21',
            ],
            [
                'id' => 'BDI-043',
                'name' => 'Christopher Ross',
                'birthday' => '2006-09-22',
            ],
            [
                'id' => 'BDI-044',
                'name' => 'Amelia Moore',
                'birthday' => '1993-05-12',
            ],
            [
                'id' => 'BDI-045',
                'name' => 'Logan Mitchell',
                'birthday' => '1991-05-10',
            ],
            [
                'id' => 'BDI-046',
                'name' => 'Elizabeth Cooper',
                'birthday' => '1983-02-03',
            ],
            [
                'id' => 'BDI-047',
                'name' => 'Andrew Foster',
                'birthday' => '1994-06-13',
            ],
            [
                'id' => 'BDI-048',
                'name' => 'Madison Turner',
                'birthday' => '1996-06-14',
            ],
            [
                'id' => 'BDI-049',
                'name' => 'Benjamin Flores',
                'birthday' => '1997-07-15',
            ],
            [
                'id' => 'BDI-050',
                'name' => 'Penelope Butler',
                'birthday' => '2005-09-22',
            ],
            [
                'id' => 'BDI-051',
                'name' => 'Samuel Scott',
                'birthday' => '1997-07-16',
            ],
            [
                'id' => 'BDI-052',
                'name' => 'Emily Nelson',
                'birthday' => '1999-07-17',
            ],
            [
                'id' => 'BDI-053',
                'name' => 'Joseph Rivera',
                'birthday' => '1993-05-12',
            ],
            [
                'id' => 'BDI-054',
                'name' => 'Avery Turner',
                'birthday' => '1985-02-05',
            ],
            [
                'id' => 'BDI-055',
                'name' => 'William Cox',
                'birthday' => '1996-06-15',
            ],
            [
                'id' => 'BDI-056',
                'name' => 'Sofia Garcia',
                'birthday' => '2007-10-24',
            ],
            [
                'id' => 'BDI-057',
                'name' => 'Ethan Baker',
                'birthday' => '1999-07-17',
            ],
            [
                'id' => 'BDI-058',
                'name' => 'Grace Adams',
                'birthday' => '1989-04-08',
            ],
            [
                'id' => 'BDI-059',
                'name' => 'Daniel Coleman',
                'birthday' => '1991-05-10',
            ],
            [
                'id' => 'BDI-060',
                'name' => 'Harper Jenkins',
                'birthday' => '1997-07-16',
            ],
            //next
            [
                'id' => 'BDI-061',
                'name' => 'Aiden Phillips',
                'birthday' => '1989-04-09',
            ],
            [
                'id' => 'BDI-062',
                'name' => 'Mia Turner',
                'birthday' => '2009-11-26',
            ],
            [
                'id' => 'BDI-063',
                'name' => 'Benjamin Lewis',
                'birthday' => '2005-09-22',
            ],
            [
                'id' => 'BDI-064',
                'name' => 'Chloe Martinez',
                'birthday' => '1993-05-12',
            ],
            [
                'id' => 'BDI-065',
                'name' => 'Samuel Adams',
                'birthday' => '2011-11-27',
            ],
            [
                'id' => 'BDI-066',
                'name' => 'Lily Turner',
                'birthday' => '1994-06-13',
            ],
            [
                'id' => 'BDI-067',
                'name' => 'Alexander Peterson',
                'birthday' => '1990-04-10',
            ],
            [
                'id' => 'BDI-068',
                'name' => 'Amelia Reed',
                'birthday' => '1984-02-05',
            ],
            [
                'id' => 'BDI-069',
                'name' => 'Michael White',
                'birthday' => '2010-11-26',
            ],
            [
                'id' => 'BDI-070',
                'name' => 'Olivia Turner',
                'birthday' => '2006-10-23',
            ],
            //next
            [
                'id' => 'BDI-071',
                'name' => 'James Hernandez',
                'birthday' => '2002-08-19',
            ],
            [
                'id' => 'BDI-072',
                'name' => 'Zoe Anderson',
                'birthday' => '2003-09-20',
            ],
            [
                'id' => 'BDI-073',
                'name' => 'William Collins',
                'birthday' => '1996-06-14',
            ],
            [
                'id' => 'BDI-074',
                'name' => 'Emily Roberts',
                'birthday' => '2007-10-24',
            ],
            [
                'id' => 'BDI-075',
                'name' => 'Jackson Lewis',
                'birthday' => '1980-01-01',
            ],
            [
                'id' => 'BDI-076',
                'name' => 'Grace Carter',
                'birthday' => '2004-09-21',
            ],
            [
                'id' => 'BDI-077',
                'name' => 'David Martinez',
                'birthday' => '1984-02-05',
            ],
            [
                'id' => 'BDI-078',
                'name' => 'Ava Reed',
                'birthday' => '2008-10-25',
            ],
            [
                'id' => 'BDI-079',
                'name' => 'Henry Thompson',
                'birthday' => '1986-03-06',
            ],
            [
                'id' => 'BDI-080',
                'name' => 'Sophia Turner',
                'birthday' => '1987-03-07',
            ],
            [
                'id' => 'BDI-081',
                'name' => 'Christopher Lee',
                'birthday' => '1997-07-16',
            ],
            [
                'id' => 'BDI-082',
                'name' => 'Charlotte King',
                'birthday' => '2002-08-19',
            ],
            [
                'id' => 'BDI-083',
                'name' => 'Samuel Campbell',
                'birthday' => '1995-06-13',
            ],
            [
                'id' => 'BDI-084',
                'name' => 'Harper Turner',
                'birthday' => '1984-02-05',
            ],
            [
                'id' => 'BDI-085',
                'name' => 'Benjamin Wright',
                'birthday' => '1983-02-03',
            ],
            [
                'id' => 'BDI-086',
                'name' => 'Mia Davis',
                'birthday' => '1985-02-05',
            ],
            [
                'id' => 'BDI-087',
                'name' => 'Michael Turner',
                'birthday' => '1998-07-16',
            ],
            [
                'id' => 'BDI-088',
                'name' => 'Elizabeth Hall',
                'birthday' => '2001-08-18',
            ],
            [
                'id' => 'BDI-089',
                'name' => 'Ethan Green',
                'birthday' => '1992-05-11',
            ],
            [
                'id' => 'BDI-090',
                'name' => 'Lily Martinez',
                'birthday' => '2002-08-19',
            ],
            [
                'id' => 'BDI-091',
                'name' => 'Alexander Scott',
                'birthday' => '2002-08-20',
            ],
            [
                'id' => 'BDI-092',
                'name' => 'Abigail Turner',
                'birthday' => '2004-09-21',
            ],
            [
                'id' => 'BDI-093',
                'name' => 'Daniel Adams',
                'birthday' => '1983-02-04',
            ],
            [
                'id' => 'BDI-094',
                'name' => 'Grace Johnson',
                'birthday' => '2010-11-26',
            ],
            [
                'id' => 'BDI-095',
                'name' => 'William Turner',
                'birthday' => '1998-07-16',
            ],
            [
                'id' => 'BDI-096',
                'name' => 'Mia Moore',
                'birthday' => '2007-10-24',
            ],
            [
                'id' => 'BDI-097',
                'name' => 'James Johnson',
                'birthday' => '2010-11-26',
            ],
            [
                'id' => 'BDI-098',
                'name' => 'Zoe White',
                'birthday' => '1992-05-11',
            ],
            [
                'id' => 'BDI-099',
                'name' => 'Samuel Smith',
                'birthday' => '1994-06-13',
            ],
            [
                'id' => 'BDI-100',
                'name' => 'Emily Turner',
                'birthday' => '2008-10-25',
            ],
            //next
            [
                'id' => 'BDI-101',
                'name' => 'Benjamin Mitchell',
                'birthday' => '2004-09-21',
            ],
            [
                'id' => 'BDI-102',
                'name' => 'Ava Turner',
                'birthday' => '1989-04-09',
            ],
            [
                'id' => 'BDI-103',
                'name' => 'Christopher Turner',
                'birthday' => '1997-07-16',
            ],
            [
                'id' => 'BDI-104',
                'name' => 'Sophia Davis',
                'birthday' => '2003-08-20',
            ],
            [
                'id' => 'BDI-105',
                'name' => 'David Scott',
                'birthday' => '1983-02-03',
            ],
            [
                'id' => 'BDI-106',
                'name' => 'Harper Martinez',
                'birthday' => '2006-10-23',
            ],
            [
                'id' => 'BDI-107',
                'name' => 'Henry Turner',
                'birthday' => '1982-02-03',
            ],
            [
                'id' => 'BDI-108',
                'name' => 'Olivia Adams',
                'birthday' => '1997-07-16',
            ],
            [
                'id' => 'BDI-109',
                'name' => 'Alexander Reed',
                'birthday' => '1984-02-04',
            ],
            [
                'id' => 'BDI-110',
                'name' => 'Amelia Turner',
                'birthday' => '2004-09-21',
            ],
            [
                'id' => 'BDI-111',
                'name' => 'Samuel Turner',
                'birthday' => '2002-08-20',
            ],
            [
                'id' => 'BDI-112',
                'name' => 'Grace Hernandez',
                'birthday' => '2003-08-20',
            ],
            [
                'id' => 'BDI-113',
                'name' => 'Michael Collins',
                'birthday' => '1983-02-03',
            ],
            [
                'id' => 'BDI-114',
                'name' => 'Mia Turner',
                'birthday' => '1984-02-04',
            ],
            [
                'id' => 'BDI-115',
                'name' => 'Benjamin Turner',
                'birthday' => '1980-01-01',
            ],
            [
                'id' => 'BDI-116',
                'name' => 'Emily Martin',
                'birthday' => '1999-07-17',
            ],
            [
                'id' => 'BDI-117',
                'name' => 'William Nelson',
                'birthday' => '1994-06-13',
            ],
            [
                'id' => 'BDI-118',
                'name' => 'Ava Anderson',
                'birthday' => '2000-08-18',
            ],
            [
                'id' => 'BDI-119',
                'name' => 'James Turner',
                'birthday' => '1990-04-09',
            ],
            [
                'id' => 'BDI-120',
                'name' => 'Charlotte Lewis',
                'birthday' => '2005-09-22',
            ],
            [
                'id' => 'BDI-121',
                'name' => 'Samuel Garcia',
                'birthday' => '2008-10-25',
            ],
            [
                'id' => 'BDI-122',
                'name' => 'Olivia Carter',
                'birthday' => '2001-08-19',
            ],
            [
                'id' => 'BDI-123',
                'name' => 'Alexander Turner',
                'birthday' => '2004-09-21',
            ],
            // next
        ];

        return $employeeList;
    }

    public static function paginate($data, $perPage = 10)
    {
        $page = Paginator::resolveCurrentPage('page');
        $next = (int)request()->query('next') ?? 0;

        $offSett = (($page - 1) * 10) + $next;

        if ($offSett < 0) {
            $offSett = 0;
        }

        $items = collect($data);

        $currentPageItems = $items->slice($offSett, $perPage)->all();
        $paginator = new LengthAwarePaginator($currentPageItems, count($items), $perPage);
        $paginator->appends(request()->query());
        $paginator->setPath(request()->url());

        return $paginator;
    }
}
