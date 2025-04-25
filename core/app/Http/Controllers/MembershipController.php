<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PDF;
class MembershipController extends Controller
{
    public function volunteer(Request $req)
    {
        // {
        //  Razor pay Logic
        // }

        // {
        //     // generate pdf from view using dynamic datas
        //     PDF::loadView('pdf.subscription', $data)->save('assets/front/invoices/' . $fileName);
        // }
        $po = (object) [
            'name' => 'John Doe',
            'email' => 'stapprabhu10@gmail.com',
            'address' => '123 Main Street, Springfield',
            'invoice_id' => 'INV-2025-001',
            'total' => 250,
        ];
        // 1. Load HTML & Generate PDF
        $pdf = PDF::loadView('yc.pdf.card', compact('user'));
        $fileName = 'invoice_' . time() . '.pdf';
        $filePath = public_path('assets/front/testcards/' . $fileName);
        $pdf->save($filePath);


        $mail = new PHPMailer(true);
        $mail->setFrom($po->email, $po->name);
        $mail->addAddress($po->email);     // Add a recipient

        // Attachments
        $mail->addAttachment('assets/front/testcards/' . $fileName);         // Add attachments

        // Content
        $mail->isHTML(true);  // Set email format to HTML
        $mail->Subject = "Order placed for " . $po->package_title;
        $mail->Body    = 'A new order has been placed.<br/><strong>Order Number: </strong>' . $po->order_number;

        $mail->send();
    }
    public function student(Request $req)
    {
        // {
        //  Razor pay Logic
        // }

        // {
        //     // generate pdf from view using dynamic datas
        //     PDF::loadView('pdf.subscription', $data)->save('assets/front/invoices/' . $fileName);
        // }
        $po = (object) [
            'name' => 'John Doe',
            'email' => 'stapprabhu10@gmail.com',
            'address' => '123 Main Street, Springfield',
            'invoice_id' => 'INV-2025-001',
            'total' => 250,
        ];
        // 1. Load HTML & Generate PDF
        $pdf = PDF::loadView('yc.pdf.card', compact('user'));
        $fileName = 'invoice_' . time() . '.pdf';
        $filePath = public_path('assets/front/testcards/' . $fileName);
        $pdf->save($filePath);


        $mail = new PHPMailer(true);
        $mail->setFrom($po->email, $po->name);
        $mail->addAddress($po->email);     // Add a recipient

        // Attachments
        $mail->addAttachment('assets/front/testcards/' . $fileName);         // Add attachments

        // Content
        $mail->isHTML(true);  // Set email format to HTML
        $mail->Subject = "Order placed for " . $po->package_title;
        $mail->Body    = 'A new order has been placed.<br/><strong>Order Number: </strong>' . $po->order_number;

        $mail->send();
    }

    public function cxo(Request $req)
    {
        // {
        //  Razor pay Logic
        // }

        // {
        //     // generate pdf from view using dynamic datas
        //     PDF::loadView('pdf.subscription', $data)->save('assets/front/invoices/' . $fileName);
        // }
        $po = (object) [
            'name' => 'John Doe',
            'email' => 'stapprabhu10@gmail.com',
            'address' => '123 Main Street, Springfield',
            'invoice_id' => 'INV-2025-001',
            'total' => 250,
        ];
        // 1. Load HTML & Generate PDF
        $pdf = PDF::loadView('yc.pdf.card', compact('user'));
        $fileName = 'invoice_' . time() . '.pdf';
        $filePath = public_path('assets/front/testcards/' . $fileName);
        $pdf->save($filePath);


        $mail = new PHPMailer(true);
        $mail->setFrom($po->email, $po->name);
        $mail->addAddress($po->email);     // Add a recipient

        // Attachments
        $mail->addAttachment('assets/front/testcards/' . $fileName);         // Add attachments

        // Content
        $mail->isHTML(true);  // Set email format to HTML
        $mail->Subject = "Order placed for " . $po->package_title;
        $mail->Body    = 'A new order has been placed.<br/><strong>Order Number: </strong>' . $po->order_number;

        $mail->send();
    }

    public function business(Request $req)
    {
        // {
        //  Razor pay Logic
        // }

        // {
        //     // generate pdf from view using dynamic datas
        //     PDF::loadView('pdf.subscription', $data)->save('assets/front/invoices/' . $fileName);
        // }
        $po = (object) [
            'name' => 'John Doe',
            'email' => 'stapprabhu10@gmail.com',
            'address' => '123 Main Street, Springfield',
            'invoice_id' => 'INV-2025-001',
            'total' => 250,
        ];
        // 1. Load HTML & Generate PDF
        $pdf = PDF::loadView('yc.pdf.card', compact('user'));
        $fileName = 'invoice_' . time() . '.pdf';
        $filePath = public_path('assets/front/testcards/' . $fileName);
        $pdf->save($filePath);


        $mail = new PHPMailer(true);
        $mail->setFrom($po->email, $po->name);
        $mail->addAddress($po->email);     // Add a recipient

        // Attachments
        $mail->addAttachment('assets/front/testcards/' . $fileName);         // Add attachments

        // Content
        $mail->isHTML(true);  // Set email format to HTML
        $mail->Subject = "Order placed for " . $po->package_title;
        $mail->Body    = 'A new order has been placed.<br/><strong>Order Number: </strong>' . $po->order_number;

        $mail->send();
    }


    public function startup(Request $req)
    {
        // {
        //  Razor pay Logic
        // }

        // {
        //     // generate pdf from view using dynamic datas
        //     PDF::loadView('pdf.subscription', $data)->save('assets/front/invoices/' . $fileName);
        // }
        $po = (object) [
            'name' => 'John Doe',
            'email' => 'stapprabhu10@gmail.com',
            'address' => '123 Main Street, Springfield',
            'invoice_id' => 'INV-2025-001',
            'total' => 250,
        ];
        // 1. Load HTML & Generate PDF
        $pdf = PDF::loadView('yc.pdf.card', compact('user'));
        $fileName = 'invoice_' . time() . '.pdf';
        $filePath = public_path('assets/front/testcards/' . $fileName);
        $pdf->save($filePath);


        $mail = new PHPMailer(true);
        $mail->setFrom($po->email, $po->name);
        $mail->addAddress($po->email);     // Add a recipient

        // Attachments
        $mail->addAttachment('assets/front/testcards/' . $fileName);         // Add attachments

        // Content
        $mail->isHTML(true);  // Set email format to HTML
        $mail->Subject = "Order placed for " . $po->package_title;
        $mail->Body    = 'A new order has been placed.<br/><strong>Order Number: </strong>' . $po->order_number;

        $mail->send();
    }




}
