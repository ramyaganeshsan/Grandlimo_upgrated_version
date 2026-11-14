<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Blocks view-only dispatcher sessions from every controller except dispatchpanel.
 * Does not change taxidispatch.php or other existing dispatcher files.
 */
class Controller extends Kohana_Controller
{
    public function before()
    {
        $session    = Session::instance();
        $controller = strtolower((string) $this->request->controller());
        $is_view_only = ($session->get('vo_userid') || $session->get('user_type') === 'V');
        if ($is_view_only && $controller !== 'dispatchpanel') {
            $this->request->redirect('dispatch-panel/view-only');
        }
        parent::before();
    }
}
