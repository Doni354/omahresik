<?php 

namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class LanguageFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Cek jika session bahasa sudah diset
        $session = session();
        $uri = service('uri');

        // Ambil segmen pertama dari URL (misalnya 'id' atau 'en')
        $lang = $uri->getSegment(1);

        // Jika tidak ada segment bahasa di URL, arahkan ke session bahasa yang sudah ada
        if (!$lang) {
            if ($session->has('lang')) {
                $lang = $session->get('lang');
            } else {
                // Jika session bahasa tidak ada, set default ke 'en'
                $session->set('lang', 'en');
                $lang = 'en';
            }

            // Mendapatkan path saat ini
            $currentPath = uri_string(); 

            // Pastikan currentPath tidak kosong sebelum redirect
            if (!empty($currentPath)) {
                return redirect()->to(base_url($lang . '/' . $currentPath));
            } else {
                // Redirect ke homepage jika currentPath kosong
                return redirect()->to(base_url($lang));
            }
        }

        // Jika segmen bahasa valid, set session
        if ($lang === 'id' || $lang === 'en') {
            $session->set('lang', $lang);
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Tidak ada yang perlu dilakukan setelah request
    }
}
