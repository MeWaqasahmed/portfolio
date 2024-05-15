import javax.swing.JFrame;
import javax.swing.SwingUtilities;

public class RatingApplication {
    public static void main(String[] args) {
        SwingUtilities.invokeLater(() -> {
            // Create the main window frame
            JFrame frame = new JFrame("Rating Panel");
            frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
            frame.setSize(300, 150);  // Set the size of the frame
            frame.setLocationRelativeTo(null);  // Center the frame on the screen

            // Add the RatingPanel to the frame
            frame.add(new RatingPanel());

            // Make the frame visible
            frame.setVisible(true);
        });
    }
}

