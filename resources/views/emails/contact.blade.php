<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Nouveau message de contact</title>
    <!-- Styles inlined for email clients -->
  </head>
  <body style="margin:0;padding:0;background-color:#f4f6f8;">
    <table role="presentation" cellpadding="0" cellspacing="0" width="100%" style="background-color:#f4f6f8;">
      <tr>
        <td align="center" style="padding:24px 12px;">
          <table role="presentation" cellpadding="0" cellspacing="0" width="100%" style="max-width:640px;background-color:#ffffff;border-radius:12px;overflow:hidden;border:1px solid #e6eaee;">
            <!-- Header -->
            <tr>
              <td style="padding:24px;background:linear-gradient(90deg,#539254,#4ab1d0);color:#ffffff;">
                <table width="100%" cellpadding="0" cellspacing="0" role="presentation">
                  <tr>
                    <td align="left" style="font-family:system-ui,-apple-system,Segoe UI,Roboto,Ubuntu,Cantarell,Noto Sans,sans-serif;">
                      <div style="display:flex;align-items:center;gap:12px;">
                        <table role="presentation" cellpadding="0" cellspacing="0" style="width:50px;height:50px;border-radius:50%;background:#ffffff;border:2px solid #ffffff;overflow:hidden;">
                          <tr>
                            <td align="center" valign="middle" style="width:40px;height:40px;line-height:0;">
                              <img src="{{ $message->embed(public_path('assets/images/Logo-FarizElectric.png')) }}" alt="Fariz Electric" width="28" style="display:block;border:0;outline:none;text-decoration:none;" />
                            </td>
                          </tr>
                        </table>
                        <span style="font-size:18px;font-weight:700;">Fariz Electric</span>
                      </div>
                      <div style="margin-top:8px;font-size:20px;font-weight:700;">Nouveau message de contact</div>
                      @if(!empty($data['subject']))
                        <div style="margin-top:4px;font-size:14px;font-weight:700;opacity:.9;">Objet : {{ $data['subject'] }}</div>
                      @endif
                    </td>
                  </tr>
                </table>
              </td>
            </tr>

            <!-- Content -->
            <tr>
              <td style="padding:24px 24px 8px 24px;">
                <table width="100%" cellpadding="0" cellspacing="0" role="presentation" style="font-family:system-ui,-apple-system,Segoe UI,Roboto,Ubuntu,Cantarell,Noto Sans,sans-serif;color:#1f2937;">
                  <tr>
                    <td style="padding-bottom:16px;">
                      <div style="font-size:14px;line-height:1.5;color:#374151;">Vous avez reçu un message depuis le formulaire de contact du site.</div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <table width="100%" cellpadding="0" cellspacing="0" role="presentation" style="border:1px solid #e5e7eb;border-radius:8px;overflow:hidden;">
                        <tr>
                          <td style="background:#f9fafb;padding:12px 16px;font-size:12px;font-weight:700;color:#539254;width:160px;">Nom</td>
                          <td style="padding:12px 16px;font-size:14px;">{{ $data['name'] }}</td>
                        </tr>
                        @if(!empty($data['firstname']))
                        <tr>
                          <td style="background:#f9fafb;padding:12px 16px;font-size:12px;font-weight:700;color:#539254;width:160px;">Prénom</td>
                          <td style="padding:12px 16px;font-size:14px;">{{ $data['firstname'] }}</td>
                        </tr>
                        @endif
                        <tr>
                          <td style="background:#f9fafb;padding:12px 16px;font-size:12px;font-weight:700;color:#539254;width:160px;">E‑mail</td>
                          <td style="padding:12px 16px;font-size:14px;">{{ $data['email'] }}</td>
                        </tr>
                        @if(!empty($data['phone']))
                        <tr>
                          <td style="background:#f9fafb;padding:12px 16px;font-size:12px;font-weight:700;color:#539254;width:160px;">Téléphone</td>
                          <td style="padding:12px 16px;font-size:14px;">{{ $data['phone'] }}</td>
                        </tr>
                        @endif
                        @if(!empty($data['subject']))
                        <tr>
                          <td style="background:#f9fafb;padding:12px 16px;font-size:12px;font-weight:700;color:#539254;width:160px;">Objet</td>
                          <td style="padding:12px 16px;font-size:14px;">{{ $data['subject'] }}</td>
                        </tr>
                        @endif
                        <tr>
                          <td style="background:#f9fafb;padding:12px 16px;font-size:12px;font-weight:700;color:#539254;width:160px;vertical-align:top;">Message</td>
                          <td style="padding:12px 16px;font-size:14px;white-space:pre-wrap;">{{ $data['message'] }}</td>
                        </tr>
                      </table>
                    </td>
                  </tr>
                </table>
              </td>
            </tr>

            <!-- CTA/Footer -->
            <!-- <tr>
              <td style="padding:8px 24px 24px 24px;">
                <table width="100%" cellpadding="0" cellspacing="0" role="presentation" style="font-family:system-ui,-apple-system,Segoe UI,Roboto,Ubuntu,Cantarell,Noto Sans,sans-serif;">
                  <tr>
                    <td align="left" style="padding-top:8px;font-size:12px;color:#6b7280;">
                      <div>Fariz Electric · 34 rue François Vernex, 74960 Annecy</div>
                      <div style="margin-top:4px;">E‑mail: <a href="mailto:contact@farizelectric.fr" style="color:#4ab1d0;text-decoration:none;">contact@farizelectric.fr</a> · Tél: <a href="tel:+33649819460" style="color:#4ab1d0;text-decoration:none;">06 49 81 94 60</a></div>
                    </td>
                  </tr>
                </table>
              </td>
            </tr> -->
          </table>
        </td>
      </tr>
    </table>
  </body>
  </html>
