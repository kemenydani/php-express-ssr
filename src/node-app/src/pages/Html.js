
/**
 * Html
 * This Html.js file acts as a template that we insert all our generated
 * application strings into before sending it to the client.
 */
const Html = ({ body, styles, title, bundleFileName }) => `
  <!DOCTYPE html>
  <html>
    <head>
      <title>${title}</title>
      ${styles}
    </head>
    <body style="margin:0">
      <div id="app">${body}</div>
      <script src="http://localhost:9005/static/${bundleFileName}.js"></script>
    </body>
  </html>
`;

export default Html;
